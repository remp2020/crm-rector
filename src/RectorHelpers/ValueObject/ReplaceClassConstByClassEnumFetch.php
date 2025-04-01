<?php
declare (strict_types=1);

namespace Crm\Utils\Rector\RectorHelpers\ValueObject;

use PHPStan\Type\ObjectType;
use Rector\Validation\RectorAssert;

final class ReplaceClassConstByClassEnumFetch
{
    public function __construct(
        private readonly string $oldClass,
        private readonly string $oldConstant,
        private readonly string $newClass,
        private readonly string $newEnum,
    ) {
        RectorAssert::className($oldClass);
        RectorAssert::constantName($oldConstant);
        RectorAssert::className($newClass);
        RectorAssert::constantName($newEnum);
    }

    public function getOldObjectType() : ObjectType
    {
        return new ObjectType($this->oldClass);
    }

    public function getOldConstant() : string
    {
        return $this->oldConstant;
    }

    public function getNewClass() : string
    {
        return $this->newClass;
    }

    public function getNewEnum() : string
    {
        return $this->newEnum;
    }
}
