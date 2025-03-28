<?php
declare (strict_types=1);

use Rector\Config\RectorConfig;

return static function (RectorConfig $rectorConfig): void {
    // transform widget manager to lazy widget manager
    $rectorConfig->rule(\Crm\Utils\Rector\UpgradeToCrm4\TransformToLazyWidgetManager::class);
    // and rename related classes & interfaces
    $rectorConfig->ruleWithConfiguration(\Rector\Renaming\Rector\Name\RenameClassRector::class, [
        'Crm\ApplicationModule\Models\Widget\WidgetManagerInterface'
        => 'Crm\ApplicationModule\Models\Widget\LazyWidgetManagerInterface',
        'Crm\ApplicationModule\Models\Widget\WidgetManager'
        => 'Crm\ApplicationModule\Models\Widget\LazyWidgetManager',
        'Crm\ApplicationModule\Models\Widget\BaseWidget'
        => 'Crm\ApplicationModule\Models\Widget\BaseLazyWidget',
    ]);
};
