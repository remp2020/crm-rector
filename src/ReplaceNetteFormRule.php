<?php

namespace Crm\Utils\Rector;

use PhpParser\Node;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt\Use_;
use Rector\Rector\AbstractRector;
use Symplify\RuleDocGenerator\ValueObject\CodeSample\CodeSample;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;

class ReplaceNetteFormRule extends AbstractRector
{
    public function getRuleDefinition(): RuleDefinition
    {
        return new RuleDefinition('Replace Nette\Application\UI\Form with Crm\ApplicationModule\UI\Form', [
            new CodeSample(
            // code before
                '
                    use Nette\Application\UI\Form;
                    ',
                // code after
                '
                    use Crm\ApplicationModule\UI\Form;
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
        // use statements
        if ($node instanceof Use_) {
            foreach ($node->uses as $use) {
                if ($use->name->toString() === 'Nette\Application\UI\Form') {
                    $use->name = new Name('Crm\ApplicationModule\UI\Form');
                    return $node;
                }
            }
        }

        // class names used in the code
        if ($node instanceof Name && $node->toString() === 'Nette\Application\UI\Form') {
            if ($node->getAttribute('is_class_extends') === true) {
                // if class extended Nette's Form, keep it that way
                return null;
            }

            if ($node->getAttribute('originalName')->name !== 'Form') {
                return new Name\FullyQualified('Crm\ApplicationModule\UI\Form');
            }
        }

        return null;
    }
}
