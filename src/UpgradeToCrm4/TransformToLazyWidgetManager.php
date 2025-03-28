<?php
declare(strict_types=1);

namespace Crm\Utils\Rector\UpgradeToCrm4;

use Crm\ApplicationModule\Models\Widget\LazyWidgetManagerInterface;
use PhpParser\Node;
use PhpParser\Node\Expr\MethodCall;
use PhpParser\Node\Identifier;
use PhpParser\Node\Name\FullyQualified;
use PhpParser\Node\Stmt\ClassMethod;
use Rector\Rector\AbstractRector;
use Symplify\RuleDocGenerator\ValueObject\CodeSample\CodeSample;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;

class TransformToLazyWidgetManager extends AbstractRector
{
    public function getRuleDefinition(): RuleDefinition
    {
        return new RuleDefinition(
            'Transform to lazy event listeners registration.',
            [
                new CodeSample(
                    badCode: '
                        public function registerWidgets(Crm\ApplicationModule\Models\Widget\WidgetManagerInterface $widgetManager)
                        {
                            $widgetManager->registerWidget(
                                "admin.user.detail.bottom",
                                $this->getInstance(\ExampleWidget::class),
                            );
                        }
                    ',
                    goodCode: '
                        public function registerLazyWidgets(Crm\ApplicationModule\Models\Widget\LazyWidgetManagerInterface $lazyWidgetManager)
                        {
                            $lazyWidgetManager->registerWidget(
                                "admin.user.detail.bottom",
                                \ExampleWidget::class,
                            );
                        }
                    '
                ),
            ]
        );
    }

    public function getNodeTypes(): array
    {
        return [MethodCall::class, ClassMethod::class];
    }

    /**
     * @param MethodCall|ClassMethod $node
     */
    public function refactor(Node $node): ?Node
    {
        // rename registerWidgets() to registerLazyWidgets()
        if ($node instanceof ClassMethod && $this->getName($node->name) === 'registerWidgets') {
            $node->name = new Identifier('registerLazyWidgets');
            if (isset($node->params[0])) { // Check if parameter exists
                $node->params[0]->type = new FullyQualified(LazyWidgetManagerInterface::class); // Use FullyQualified
            }
            return $node; // Important: Return the modified node
        }

        // remove $this->getInstance()
        if ($node instanceof MethodCall && $this->isNames($node->name, ['registerWidget', 'overrideWidget', 'removeWidget', 'registerWidgetFactory'])) {
            if (count($node->args) > 1) { // Check if second argument exists
                $arg = $node->args[1];
                if ($arg->value instanceof MethodCall && $this->getName($arg->value->name) === 'getInstance') {
                    if (count($arg->value->args) > 0) { // Check if getInstance has arguments
                        $node->args[1] = $arg->value->args[0];
                        return $node; // Important: Return the modified node
                    }
                }
            }
        }

        return null; // Return null if no changes were made
    }
}
