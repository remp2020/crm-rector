<?php
declare(strict_types=1);

namespace Crm\Utils\Rector\UpgradeToCrm1;

use Rector\Core\Rector\AbstractRector;
use Symplify\RuleDocGenerator\ValueObject\CodeSample\CodeSample;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;

final class ApiHandlerJsonResponseRector extends AbstractRector
{
    public function getRuleDefinition(): RuleDefinition
    {
        return new RuleDefinition(
            'Change Crm\ApiModule\Api\JsonResponse to Tomaj\NetteApi\Response\JsonApiResponse',
            [
                new CodeSample(
                    // code before
                    '
                    $response = new Crm\ApiModule\Api\JsonResponse($result);
                    $response->setHttpCode($responseHttpCode);
                    ',
                    // code after
                    '
                    $response = new Tomaj\NetteApi\Response\JsonApiResponse($responseHttpCode, $result);
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
        return [\PhpParser\Node\Expr\Assign::class];
    }

    /**
     * @param \PhpParser\Node\Expr\Assign $node
     */
    public function refactor(\PhpParser\Node $node): ?\PhpParser\Node
    {
        if (!$node->var instanceof \PhpParser\Node\Expr\Variable) {
            return null;
        }
        if (!$node->expr instanceof \PhpParser\Node\Expr\New_) {
            return null;
        }

        // process only assigns of JsonResponse
        if (!$this->isObjectType($node->expr, new \PHPStan\Type\ObjectType('Crm\ApiModule\Api\JsonResponse'))) {
            return null;
        }
        $assignVarName = $this->nodeNameResolver->getName($node->var);

        // without these arguments we cannot build new JsonApiResponse
        if (empty($node->expr->args)) {
            return null;
        }
        $responseArguments = $node->expr->args;

        // get parent node
        $parentNode = $node->getAttribute(\Rector\NodeTypeResolver\Node\AttributeKey::PARENT_NODE);
        if ($parentNode === null) {
            return null;
        }

        // find next node with JsonResponse->setHttpCode() method
        $var = $this->betterNodeFinder->findFirstNext(
            $parentNode,
            function (\PhpParser\Node $node) use ($assignVarName): bool {
                if (!$node instanceof \PhpParser\Node\Expr\MethodCall) {
                    return false;
                }

                // it has to be method call on JsonResponse object we are working with
                $currentNodeName = $this->nodeNameResolver->getName($node->var);
                if ($assignVarName !== $currentNodeName) {
                    return false;
                }

                return $this->nodeNameResolver->isName($node->name, 'setHttpCode');
            }
        );

        // no node with setHttpCode found
        // or missing argument for setHttpCode (this is bug in code but we want to check it before we use it)
        if ($var === null || empty($var->args[0])) {
            return null;
        }
        $httpCode = $var->args[0];

        // http response code should be first in final response arguments
        array_unshift($responseArguments, $httpCode);

        // remove node with setHttpCode call; http code is now part of JsonApiResponse
        $this->nodeRemover->removeNode($var);

        return new \PhpParser\Node\Expr\Assign(
            $node->var,
            new \PhpParser\Node\Expr\New_(
                new \PhpParser\Node\Name\FullyQualified('Tomaj\NetteApi\Response\JsonApiResponse'),
                $responseArguments
            )
        );
    }
}
