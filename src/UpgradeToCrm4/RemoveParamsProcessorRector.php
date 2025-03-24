<?php
declare(strict_types=1);

namespace Crm\Utils\Rector\UpgradeToCrm4;

use PHPStan\Type\ObjectType;
use PhpParser\Node;
use PhpParser\Node\Expr\Assign;
use PhpParser\Node\Expr\MethodCall;
use PhpParser\Node\Expr\New_;
use PhpParser\Node\Stmt\Expression;
use PhpParser\Node\Stmt\If_;
use PhpParser\NodeVisitor;
use Rector\Rector\AbstractRector;
use Symplify\RuleDocGenerator\ValueObject\CodeSample\CodeSample;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;

final class RemoveParamsProcessorRector extends AbstractRector
{
    public function getRuleDefinition(): RuleDefinition
    {
        return new RuleDefinition('Removes ParamsProcessor instantiations and method call getValues()', [
            new CodeSample(
                badCode: '
                $paramsProcessor = new \Crm\ApiModule\Models\Params\ParamsProcessor($this->params());
                $params = $paramsProcessor->getValues();
                ',
                goodCode: ''
            ),
            new CodeSample(
                // removes whole if block if method is part of condition
                badCode: '
                $paramsProcessor = new \Crm\ApiModule\Models\Params\ParamsProcessor($this->params());
                if ($paramsProcessor->hasError()) {
                    // ...
                }
                ',
                goodCode: ''
            ),
            new CodeSample(
                // removes only method call if it's assigned before if block
                badCode: '
                $paramsProcessor = new \Crm\ApiModule\Models\Params\ParamsProcessor($this->params());
                $hasError = $paramsProcessor->hasError();
                if ($hasError) {
                    // ...
                }
                ',
                goodCode: '
                if ($hasError) {
                    // ...
                }
                '
            ),
        ]);
    }

    public function getNodeTypes(): array
    {
        return [Expression::class, If_::class];
    }

    public function refactor(Node $node)
    {
        // ***************************************************************
        // remove instantiations of ParamsProcessor
        if ($node instanceof Expression && $node->expr instanceof Assign) {
            $assignExpr = $node->expr;
            if ($assignExpr->expr instanceof New_ && $this->isName($assignExpr->expr->class, 'Crm\ApiModule\Models\Params\ParamsProcessor')) {
                return NodeVisitor::REMOVE_NODE;
            }
        }

        // ***************************************************************
        // remove calls of ParamsProcessor methods
        $workNode = $node;
        if ($workNode instanceof If_) {
            $workNode = $workNode->cond;
        }
        if ($workNode->expr instanceof Assign) {
            $workNode = $workNode->expr->expr;
        }
        if (!($workNode instanceof MethodCall) && $workNode->expr instanceof MethodCall) {
            $workNode = $workNode->expr;
        }

        if ($workNode instanceof MethodCall) {
            if ($this->isObjectType($workNode->var, new ObjectType('Crm\ApiModule\Models\Params\ParamsProcessor'))
                && $this->isNames($workNode->name, ['getValues', 'hasError', 'isError'])) {
                return NodeVisitor::REMOVE_NODE;
            }
        }

        return null;
    }
}
