<?php
declare(strict_types=1);

namespace Crm\Utils\Rector\Set;

final class CrmSetList
{
    /**
     * string
     */
    public const NETTE_ANNOTATIONS_TO_ATTRIBUTES = __DIR__ . '/../../config/sets/annotations-to-attributes.php';

    /**
     * @var string
     */
    public const CRM_3_0_PSR4 = __DIR__ . '/../../config/sets/crm-3-0-psr4.php';

    /**
     * @var string
     */
    public const CRM_4 = __DIR__ . '/../../config/sets/crm-4.php';

    /**
     * @var string
     */
    public const CRM_4_LAZY_WIDGET_MANAGER = __DIR__ . '/../../config/sets/crm-4-lazy-widget-manager.php';

    /**
     * @var string
     */
    public const CRM_4_ENUMS = __DIR__ . '/../../config/sets/crm-4-enums.php';
}
