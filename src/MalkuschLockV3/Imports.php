<?php

namespace Crm\Utils\Rector\MalkuschLockV3;

use PhpParser\Node;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt\Use_;
use Rector\Rector\AbstractRector;
use Symplify\RuleDocGenerator\ValueObject\CodeSample\CodeSample;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;

class Imports extends AbstractRector
{
    public function getRuleDefinition(): RuleDefinition
    {
        return new RuleDefinition('Updates use of malkusch/lock imports to v3', [
            new CodeSample(
            // code before
                '
                    use malkusch\lock\mutex\PredisMutex;
                    ',
                // code after
                '
                    use Malkusch\Lock\Mutex\RedisMutex;
                    '
            ),
        ]);
    }

    public function getNodeTypes(): array
    {
        return [Use_::class, Name::class];
    }

    public function refactor(Node $node): ?Node
    {
        // class names used in the code
        if ($node instanceof Name && $node->toString() === 'malkusch\lock\mutex\PredisMutex') {
            return new Name('RedisMutex');
        }

        // use statements
        if ($node instanceof Use_) {
            foreach ($node->uses as $use) {
                if ($use->name->toString() === 'malkusch\lock\mutex\PredisMutex') {
                    $use->name = new Name('Malkusch\Lock\Mutex\RedisMutex');
                    return $node;
                } elseif (str_starts_with('malkusch\lock\mutex', $use->name->toString())) {
                    $use->name = new Name(str_replace('malkusch\lock\mutex', 'Malkusch\Lock\Mutex', $use->name->toString()));
                    return $node;
                }
            }
        }

        return null;
    }
}
