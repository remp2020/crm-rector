<?php

namespace Crm\Utils\Rector\TransformToLazyEventListeners;

use Crm\ApplicationModule\Event\LazyEventEmitter;
use PhpParser\Node;
use PhpParser\Node\Expr\MethodCall;
use PhpParser\Node\Identifier;
use PhpParser\Node\Stmt\ClassMethod;
use Rector\Core\Rector\AbstractRector;
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
                    public function registerLazyEventHandlers(\Crm\ApplicationModule\Event\LazyEventEmitter $emitter)
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
        $methodCallName = $this->getName($node->name);

        if ($methodCallName === 'registerEventHandlers') {
            $node->name = new Identifier('registerLazyEventHandlers');
            $node->params[0]->type = new Node\Name\FullyQualified(LazyEventEmitter::class);
        }

        if ($this->isNames($node->name, ['addListener', 'removeListener'])) {
            $arg = $node->getArgs()[1];
            if ($arg->value instanceof MethodCall
                && $this->getName($arg->value->name) === 'getInstance') {
                $node->args[1] = $arg->value->getArgs()[0];
            }
        }

        return $node;
    }
}
