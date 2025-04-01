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


    // **********************************************************************
    // Replace RecurrentPaymentsRepository constants with RecurrentPaymentStateEnum enums
    $recurrentPaymentStates = [
        'STATE_USER_STOP' => 'UserStop',
        'STATE_ADMIN_STOP' => 'AdminStop',
        'STATE_ACTIVE' => 'Active',
        'STATE_PENDING' => 'Pending',
        'STATE_CHARGED' => 'Charged',
        'STATE_CHARGE_FAILED' => 'ChargeFailed',
        'STATE_SYSTEM_STOP' => 'SystemStop',
    ];

    foreach ($recurrentPaymentStates as $oldRPState => $newRPState) {
        $rectorConfig->ruleWithConfiguration(\Crm\Utils\Rector\UpgradeToCrm4\ReplaceConstWithEnumRector::class, [
            new \Crm\Utils\Rector\RectorHelpers\ValueObject\ReplaceClassConstByClassEnumFetch(
                'Crm\PaymentsModule\Repositories\RecurrentPaymentsRepository',
                $oldRPState,
                'Crm\PaymentsModule\Models\RecurrentPayment\RecurrentPaymentStateEnum',
                $newRPState,
            )
        ]);
    }

    // **********************************************************************
    // Replace ParsedMailLogsRepository constants with ParsedMailLogStateEnum enums
    $parsedMailLogsStates = [
        'STATE_WITHOUT_VS' => 'WithoutVs',
        'STATE_ALREADY_PAID' => 'AlreadyPaid',
        'STATE_DUPLICATED_PAYMENT' => 'DuplicatedPayment',
        'STATE_CHANGED_TO_PAID' => 'ChangedToPaid',
        'STATE_PAYMENT_NOT_FOUND' => 'PaymentNotFound',
        'STATE_DIFFERENT_AMOUNT' => 'DifferentAmount',
        'STATE_AUTO_NEW_PAYMENT' => 'AutoNewPayment',
        'STATE_NO_SIGN' => 'NoSign',
        'STATE_NOT_VALID_SIGN' => 'NotValidSign',
        'STATE_ALREADY_REFUNDED' => 'AlreadyRefunded',
    ];

    foreach ($parsedMailLogsStates as $oldPMLState => $newPMLState) {
        $rectorConfig->ruleWithConfiguration(\Crm\Utils\Rector\UpgradeToCrm4\ReplaceConstWithEnumRector::class, [
            new \Crm\Utils\Rector\RectorHelpers\ValueObject\ReplaceClassConstByClassEnumFetch(
                'Crm\PaymentsModule\Repositories\ParsedMailLogsRepository',
                $oldPMLState,
                'Crm\PaymentsModule\Models\ParsedMailLog\ParsedMailLogStateEnum',
                $newPMLState,
            )
        ]);
    }
};
