<?php
declare(strict_types=1);

namespace Crm\Utils\Rector\UpgradeToCrm4;

use Crm\Utils\Rector\RectorHelpers\ValueObject\ReplaceClassConstByClassEnumFetch;
use PhpParser\Node;
use PhpParser\Node\Expr\ClassConstFetch;
use PhpParser\Node\Identifier;
use PhpParser\Node\Name\FullyQualified;
use Rector\Contract\Rector\ConfigurableRectorInterface;
use Rector\Rector\AbstractRector;
use RectorPrefix202502\Webmozart\Assert\Assert;
use Symplify\RuleDocGenerator\ValueObject\CodeSample\CodeSample;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;

final class ReplaceConstWithEnumRector extends AbstractRector implements ConfigurableRectorInterface
{
    /**
     * @var ReplaceClassConstByClassEnumFetch[]
     */
    private array $replaceClassConstByClassEnumFetches = [];

    public function getRuleDefinition(): RuleDefinition
    {
        return new RuleDefinition('', [
            new CodeSample(
                badCode: '$value = SomeClass::OLD_CONSTANT;',
                goodCode: '$value = SomeEnumClass::NEW_ENUM->value;',
            ),
        ]);
    }

    public function getNodeTypes(): array
    {
        return [ClassConstFetch::class];
    }

    public function refactor(Node $node)
    {
        foreach ($this->replaceClassConstByClassEnumFetches as $replaceClassConstByClassEnumFetch) {
            $oldClassType = $replaceClassConstByClassEnumFetch->getOldObjectType();
            $oldConstName = $replaceClassConstByClassEnumFetch->getOldConstant();
            $newClassName = $replaceClassConstByClassEnumFetch->getNewClass();
            $newEnumName = $replaceClassConstByClassEnumFetch->getNewEnum();

            if (!$this->isName($node->name, $oldConstName)) {
                continue;
            }
            if (!$this->isObjectType($node->class, $oldClassType)) {
                continue;
            }

            $classConstFetch =  new ClassConstFetch(
                new FullyQualified($newClassName),
                new Identifier($newEnumName)
            );
            return new Node\Expr\PropertyFetch($classConstFetch, 'value');
        }

        return null;
    }

    /**
     * @param mixed[] $configuration
     */
    public function configure(array $configuration): void
    {
        Assert::allIsAOf($configuration, ReplaceClassConstByClassEnumFetch::class);

        /** @var ReplaceClassConstByClassEnumFetch[] $configuration */
        $replaceConstWithEnum = \array_merge($this->replaceClassConstByClassEnumFetches, $configuration);
        $this->replaceClassConstByClassEnumFetches = $replaceConstWithEnum;
    }
}
