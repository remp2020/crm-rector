<?php

namespace Crm\Utils\Rector\Set;

final class CrmSetList implements \Rector\Set\Contract\SetListInterface
{
    /**
     * @var string
     */
    public const CRM_1_0 = __DIR__ . '/../../config/sets/crm-1-0.php';

    /**
     * @var string
     */
    public const CRM_1_0_WITHOUT_NETTE = __DIR__ . '/../../config/sets/crm-1-0-without-nette.php';
}
