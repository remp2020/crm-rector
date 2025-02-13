<?php

namespace Crm\Utils\Rector\TransformToLazyEventListeners;

use Crm\ApplicationModule\Models\Event\LazyEventEmitter;
use PhpParser\Node;
use PhpParser\Node\Expr\MethodCall;
use PhpParser\Node\Identifier;
use PhpParser\Node\Name\FullyQualified;
use PhpParser\Node\Stmt\ClassMethod;
use Rector\Rector\AbstractRector;
use Symplify\RuleDocGenerator\Exception\PoorDocumentationException;
use Symplify\RuleDocGenerator\ValueObject\CodeSample\CodeSample;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;

class TransformToLazyEventListeners extends AbstractRector
{
    /**
     * @throws PoorDocumentationException
     */
    public function getRuleDefinition(): RuleDefinition
    {
        return new RuleDefinition(
            'Transform to lazy event listeners registration.',
            [
                new CodeSample(
                // code before
                    '
                    public function registerEventHandlers(Emitter $emitter)
                    {
                        $emitter->addListener(
                            \Crm\UsersModule\Events\UserRegisteredEvent::class,
                            $this->getInstance(\Crm\UsersModule\Events\UserRegisteredEventHandler::class)
                        );
                    }
                    ',
                    // code after
                    '
                    public function registerLazyEventHandlers(\Crm\ApplicationModule\Models\Event\LazyEventEmitter $emitter)
                    {
                        $emitter->addListener(
                            \Crm\UsersModule\Events\UserRegisteredEvent::class,
                            \Crm\UsersModule\Events\UserRegisteredEventHandler::class
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
        if ($node instanceof ClassMethod && $this->getName($node->name) === 'registerEventHandlers') {
            $node->name = new Identifier('registerLazyEventHandlers');
            if (isset($node->params[0])) { // Check if parameter exists
                $node->params[0]->type = new FullyQualified(LazyEventEmitter::class); // Use FullyQualified
            }
            return $node; // Important: Return the modified node
        }

        if ($node instanceof MethodCall && $this->isNames($node->name, ['addListener', 'removeListener'])) {
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
