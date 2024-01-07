<?php

declare (strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Renaming\Rector\Name\RenameClassRector;

return static function (RectorConfig $rectorConfig) : void {

    $rectorConfig->ruleWithConfiguration(RenameClassRector::class, [
        // ********************************************************************
        // extensions/admin-module
        'Crm\AdminModule\Components\AdminMenuFactoryInterface'
            => 'Crm\AdminModule\Components\AdminMenu\AdminMenuFactoryInterface',
        'Crm\AdminModule\Components\AdminMenu'
            => 'Crm\AdminModule\Components\AdminMenu\AdminMenu',

        'Crm\AdminModule\DataProvider\ConfigFormDataProviderInterface'
            => 'Crm\AdminModule\DataProviders\ConfigFormDataProviderInterface',

        'Crm\AdminModule\Model\UniversalSearch'
            => 'Crm\AdminModule\Models\UniversalSearch',
        'Crm\AdminModule\Model\UniversalSearchDataProviderInterface'
            => 'Crm\AdminModule\Models\UniversalSearchDataProviderInterface',

        'Crm\AdminModule\Populator\AuditLogsPopulator'
            => 'Crm\AdminModule\Populators\AuditLogsPopulator',

        // ********************************************************************
        // extensions/api-module
        // ********************************************************************
        // extensions/apple-appstore-module
        // ********************************************************************
        // extensions/application-module
        // ********************************************************************
        // extensions/coupon-module
        // ********************************************************************
        // extensions/dashboard-module
        // ********************************************************************
        // extensions/gifts-module
        // ********************************************************************
        // extensions/google-play-billing-module
        // ********************************************************************
        // extensions/gopay-module
        // ********************************************************************
        // extensions/invoices-module
        // ********************************************************************
        // extensions/issues-module
        // ********************************************************************
        // extensions/mobiletech-module
        // ********************************************************************
        // extensions/muj-dum-module
        // ********************************************************************
        // extensions/multicash-module
        // ********************************************************************
        // extensions/onboarding-module
        // ********************************************************************
        // extensions/payments-module
        // ********************************************************************
        // extensions/print-module
        // ********************************************************************
        // extensions/privatbankar-module
        // ********************************************************************
        // extensions/products-module
        // ********************************************************************
        // extensions/salesfunnel-module
        // ********************************************************************
        // extensions/scenarios-module
        // ********************************************************************
        // extensions/segment-module
        // ********************************************************************
        // extensions/slsp-sporopay-module
        // ********************************************************************
        // extensions/subscriptions-module
        // ********************************************************************
        // extensions/upgrades-module
        // ********************************************************************
        // extensions/users-module
        // ********************************************************************
        // extensions/vub-eplatby-module
        // ********************************************************************
        // extensions/wordpress-module
    ]);
};
