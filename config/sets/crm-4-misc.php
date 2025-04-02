<?php
declare (strict_types=1);

use Rector\Config\RectorConfig;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->ruleWithConfiguration(\Rector\Renaming\Rector\Name\RenameClassRector::class, [
        'Crm\UsersModule\Events\UserCreatedEvent'
        => 'Crm\UsersModule\Events\UserRegisteredEvent',
    ]);
};
