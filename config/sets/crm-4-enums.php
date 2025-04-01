<?php
declare (strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Renaming\Rector\Name\RenameClassRector;

return static function (RectorConfig $rectorConfig): void {
    // **********************************************************************
    // Rename enums that are missing context in class name
    $rectorConfig->ruleWithConfiguration(RenameClassRector::class, [
        'Crm\PaymentsModule\Models\ParsedMailLog\StateEnum' =>
            'Crm\PaymentsModule\Models\ParsedMailLog\ParsedMailLogStateEnum',
        'Crm\PaymentsModule\Models\RecurrentPayment\StateEnum' =>
            'Crm\PaymentsModule\Models\RecurrentPayment\RecurrentPaymentStateEnum',
        'Crm\UsersModule\Models\AddressChangeRequest\StatusEnum' =>
            'Crm\UsersModule\Models\AddressChangeRequest\AddressChangeRequestStatusEnum',
    ]);
};
