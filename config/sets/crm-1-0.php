<?php

declare (strict_types=1);

return static function (\Rector\Config\RectorConfig $rectorConfig) : void {
    /*
     * REMP CRM related changes
     */
    $rectorConfig->import(\Crm\Utils\Rector\Set\CrmSetList::CRM_1_0_WITHOUT_NETTE);

    /*
     * Nette 3 rules
     */
    $rectorConfig->import(\Rector\Nette\Set\NetteSetList::NETTE_30);
    $rectorConfig->import(\Rector\Nette\Set\NetteSetList::NETTE_31);
};
