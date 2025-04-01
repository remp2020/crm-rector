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

    // **********************************************************************
    // Replace PaymentsRepository constants with PaymentStatusEnum enums
    $paymentStatuses = [
        'STATUS_FORM' => 'Form',
        'STATUS_PAID' => 'Paid',
        'STATUS_FAIL' => 'Fail',
        'STATUS_TIMEOUT' => 'Timeout',
        'STATUS_REFUND' => 'Refund',
        'STATUS_IMPORTED' => 'Imported',
        'STATUS_PREPAID' => 'Prepaid',
        'STATUS_AUTHORIZED' => 'Authorized',
    ];

    foreach ($paymentStatuses as $oldStatus => $newStatus) {
        $rectorConfig->ruleWithConfiguration(\Crm\Utils\Rector\UpgradeToCrm4\ReplaceConstWithEnumRector::class, [
            new \Crm\Utils\Rector\RectorHelpers\ValueObject\ReplaceClassConstByClassEnumFetch(
                'Crm\PaymentsModule\Repositories\PaymentsRepository',
                $oldStatus,
                'Crm\PaymentsModule\Models\Payment\PaymentStatusEnum',
                $newStatus,
            )
        ]);
    }
};
