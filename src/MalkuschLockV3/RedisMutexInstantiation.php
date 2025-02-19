<?php

namespace Crm\Utils\Rector\MalkuschLockV3;

use PHPStan\Type\ObjectType;
use PhpParser\Node;
use PhpParser\Node\Expr\New_;
use Rector\Rector\AbstractRector;
use Symplify\RuleDocGenerator\ValueObject\CodeSample\CodeSample;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;

class RedisMutexInstantiation extends AbstractRector
{
    public function getRuleDefinition(): RuleDefinition
    {
        return new RuleDefinition('Updates instantiation of RedisMutex to use single Redis client. Applicable only if you used single Redis client in constructor.', [
            new CodeSample(
            // code before
                '
                    new RedisMutex([$client], $name, $timeout);
                    ',
                // code after
                '
                    new RedisMutex($client, $name, $timeout);
                    '
            ),
        ]);
    }

    public function getNodeTypes(): array
    {
        return [New_::class];
    }

    public function refactor(Node $node): ?Node
    {
        if ($node->isFirstClassCallable()) {
            return null;
        }
        if (!$this->isObjectType($node->class, new ObjectType('Malkusch\Lock\Mutex\RedisMutex'))) {
            return null;
        }

        $firstArg = $node->args[0];
        if ($firstArg->value instanceof Node\Expr\Array_) {
            $value = $firstArg->value;
            if (count($value->items) !== 1) {
                // multi-item array needs to be handled manually
                return null;
            }
            $redisInstance = $value->items[0]->value;
            $node->args[0]->value = $redisInstance;
        }

        return null;
    }
}
