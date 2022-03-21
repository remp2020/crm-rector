<?php
declare(strict_types=1);

namespace Crm\Utils\Rector\UpgradeToCrm1;

use Rector\Core\Rector\AbstractRector;
use Symplify\RuleDocGenerator\ValueObject\CodeSample\CodeSample;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;

final class ApiHandlerParametersRector extends AbstractRector
{
    private \Rector\BetterPhpDocParser\PhpDocManipulator\PhpDocTagRemover $phpDocTagRemover;

    public function __construct(\Rector\BetterPhpDocParser\PhpDocManipulator\PhpDocTagRemover $phpDocTagRemover)
    {
        $this->phpDocTagRemover = $phpDocTagRemover;
    }

    public function getRuleDefinition(): RuleDefinition
    {
        return new RuleDefinition(
            'Change signature of ApiHandlerInterface::handle() and IdempotentHandlerInterface::idempotentHandle()',
            [
                new CodeSample(
                    // code before
                    '
                    public function handle(\Crm\ApiModule\Authorization\ApiAuthorizationInterface $authorization): ResponseInterface
                    {
                        $data = $authorization->getAuthorizedData();

                        $params = $paramsProcessor->getValues();
                    }
                    ',
                    // code after
                    '
                    public function handle(array $params): ResponseInterface
                    {
                        $authorization = $this->getAuthorization();
                        $data = $authorization->getAuthorizedData();
                    }
                    '
                ),
            ]
        );
    }

    /**
     * @return array<class-string<\PhpParser\Node>>
     */
    public function getNodeTypes(): array
    {
        return [\PhpParser\Node\Stmt\ClassMethod::class];
    }

    /**
     * @param \PhpParser\Node\Stmt\ClassMethod $node
     */
    public function refactor(\PhpParser\Node $node): ?\PhpParser\Node
    {
        // process only API handlers
        $parentNode = $node->getAttribute(\Rector\NodeTypeResolver\Node\AttributeKey::PARENT_NODE);
        if (!$parentNode || !$this->isObjectType($parentNode, new \PHPStan\Type\ObjectType('Crm\ApiModule\Api\ApiHandlerInterface'))) {
            return null;
        }

        // process only handle() and idempotentHandle() methods
        if (!$this->isNames($node->name, ['handle', 'idempotentHandle'])) {
            return null;
        }

        // remove old "ApiAuthorizationInterface $authorization"
        // (there was only one parameter; position === 0)
        if (isset($node->params[0]) && $node->params[0]->type->toCodeString() === '\Crm\ApiModule\Authorization\ApiAuthorizationInterface') {
            // store variable name for initialization
            $authorizationVarName = $node->params[0]->var->name ?? 'authorization';
            $this->nodeRemover->removeParam($node, 0);
        }

        // add new "array $params"
        $param = new \PhpParser\Node\Param(new \PhpParser\Node\Expr\Variable('params'));
        $param->type = new \PhpParser\Node\Name('array');
        $node->params[0] = $param;

        // reinitialize $authorization from ApiHandler getter if it is used in method
        // (initialized is variable with name used in method declaration for ApiAuthorizationInterface)
        if (isset($authorizationVarName) && $this->betterNodeFinder->findVariableOfName($node->stmts, $authorizationVarName)) {
            // check if $authorization is initialized (in case method param was overridden)
            $authorizationAlreadyAssigned = false;
            foreach ((array) $node->stmts as $stmt) {
                if ($stmt instanceof \PhpParser\Node\Stmt\Expression &&
                    isset($stmt->expr->var->name) &&
                    $stmt->expr->var->name === $authorizationVarName
                ) {
                    $authorizationAlreadyAssigned = true;
                    break;
                }
            }

            // initialize $authorization variable
            if (!$authorizationAlreadyAssigned) {
                $assign = new \PhpParser\Node\Expr\Assign(
                    new \PhpParser\Node\Expr\Variable($authorizationVarName),
                    $this->nodeFactory->createMethodCall('this', 'getAuthorization')
                );
                $assignStmt = new \PhpParser\Node\Stmt\Expression($assign);
                // TODO: addNodeAfterNode works; check why before does not?
//                $this->nodesToAddCollector->addNodeBeforeNode($assignStmt, $node->getStmts()[0]);
                $node->stmts = array_merge([$assignStmt], (array) $node->stmts);
            }
        }

        // remove phpDoc annotations for changed param and return
        $phpDocInfo = $this->phpDocInfoFactory->createFromNodeOrEmpty($node);
        foreach (['param', 'return'] as $annotationToRemove) {
            $this->phpDocTagRemover->removeByName($phpDocInfo, $annotationToRemove);
            if (!\is_a($annotationToRemove, \PHPStan\PhpDocParser\Ast\PhpDoc\PhpDocTagValueNode::class, \true)) {
                continue;
            }
            $phpDocInfo->removeByType($annotationToRemove);
        }

        return $node;
    }
}
