<?php
declare (strict_types=1);

use Rector\Config\RectorConfig;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->rule(\Crm\Utils\Rector\UpgradeToCrm4\InputParamChangeRector::class);
    $rectorConfig->rule(\Crm\Utils\Rector\UpgradeToCrm4\RemoveParamsProcessorRector::class);
    $rectorConfig->ruleWithConfiguration(\Rector\Renaming\Rector\Name\RenameClassRector::class, [
        'Crm\UsersModule\Events\UserCreatedEvent'
        => 'Crm\UsersModule\Events\UserRegisteredEvent',
    ]);

    $rectorConfig->sets([
        \Crm\Utils\Rector\Set\CrmSetList::CRM_4_LAZY_WIDGET_MANAGER,
        \Crm\Utils\Rector\Set\CrmSetList::CRM_4_ENUMS,
    ]);
};
