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
        'Crm\ApiModule\Api\LazyApi'
            => 'Crm\ApiModule\Models\Api\Lazy\LazyApi',
        'Crm\ApiModule\Api\LazyApiDecider'
            => 'Crm\ApiModule\Models\Api\Lazy\LazyApiDecider',
        'Crm\ApiModule\Api\ApiConfigurationException'
            => 'Crm\ApiModule\Models\Api\ApiConfigurationException',
        'Crm\ApiModule\Api\ApiHandler'
            => 'Crm\ApiModule\Models\Api\ApiHandler',
        'Crm\ApiModule\Api\ApiHandlerInterface'
            => 'Crm\ApiModule\Models\Api\ApiHandlerInterface',
        'Crm\ApiModule\Api\ApiHeadersConfig'
            => 'Crm\ApiModule\Models\Api\ApiHeadersConfig',
        'Crm\ApiModule\Api\ApiLoggerConfig'
            => 'Crm\ApiModule\Models\Api\ApiLoggerConfig',
        'Crm\ApiModule\Api\ApiParamsValidatorInterface'
            => 'Crm\ApiModule\Models\Api\ApiParamsValidatorInterface',
        'Crm\ApiModule\Api\ApiRouteInterface'
            => 'Crm\ApiModule\Models\Api\ApiRouteInterface',
        'Crm\ApiModule\Api\ApiRoutersContainerInterface'
            => 'Crm\ApiModule\Models\Api\ApiRoutersContainerInterface',
        'Crm\ApiModule\Api\IdempotentHandlerInterface'
            => 'Crm\ApiModule\Models\Api\IdempotentHandlerInterface',
        'Crm\ApiModule\Api\JsonValidationResult'
            => 'Crm\ApiModule\Models\Api\JsonValidationResult',
        'Crm\ApiModule\Api\JsonValidationTrait'
            => 'Crm\ApiModule\Models\Api\JsonValidationTrait',
        'Crm\ApiModule\Models\LoggerEndpointIdentifier'
            => 'Crm\ApiModule\Models\Api\LoggerEndpointIdentifier',
        'Crm\ApiModule\Api\Runner'
            => 'Crm\ApiModule\Models\Api\Runner',

        'Crm\ApiModule\Authorization\AdminLoggedAuthorization'
            => 'Crm\ApiModule\Models\Authorization\AdminLoggedAuthorization',
        'Crm\ApiModule\Authorization\ApiAuthorizationInterface'
            => 'Crm\ApiModule\Models\Authorization\ApiAuthorizationInterface',
        'Crm\ApiModule\Authorization\BearerTokenAuthorization'
            => 'Crm\ApiModule\Models\Authorization\BearerTokenAuthorization',
        'Crm\ApiModule\Authorization\NoAuthorization'
            => 'Crm\ApiModule\Models\Authorization\NoAuthorization',
        'Crm\ApiModule\Authorization\Permissions'
            => 'Crm\ApiModule\Models\Authorization\Permissions',
        'Crm\ApiModule\Authorization\TokenParser'
            => 'Crm\ApiModule\Models\Authorization\TokenParser',

        'Crm\ApiModule\Params\ParamInterface'
            => 'Crm\ApiModule\Models\Params\ParamInterface',
        'Crm\ApiModule\Params\InputParam'
            => 'Crm\ApiModule\Models\Params\InputParam',
        'Crm\ApiModule\Params\ParamsProcessor'
            => 'Crm\ApiModule\Models\Params\ParamsProcessor',

        'Crm\ApiModule\Repository\ApiAccessRepository'
            => 'Crm\ApiModule\Repositories\ApiAccessRepository',
        'Crm\ApiModule\Repository\ApiAccessTokensRepository'
            => 'Crm\ApiModule\Repositories\ApiAccessTokensRepository',
        'Crm\ApiModule\Repository\ApiLogsRepository'
            => 'Crm\ApiModule\Repositories\ApiLogsRepository',
        'Crm\ApiModule\Repository\ApiTokenMetaRepository'
            => 'Crm\ApiModule\Repositories\ApiTokenMetaRepository',
        'Crm\ApiModule\Repository\ApiTokenStatsRepository'
            => 'Crm\ApiModule\Repositories\ApiTokenStatsRepository',
        'Crm\ApiModule\Repository\ApiTokensRepository'
            => 'Crm\ApiModule\Repositories\ApiTokensRepository',
        'Crm\ApiModule\Repository\IdempotentKeysRepository'
            => 'Crm\ApiModule\Repositories\IdempotentKeysRepository',
        'Crm\ApiModule\Repository\UserSourceAccessesRepository'
            => 'Crm\ApiModule\Repositories\UserSourceAccessesRepository',

        'Crm\ApiModule\Response\ApiResponseInterface'
            => 'Crm\ApiModule\Models\Response\ApiResponseInterface',
        'Crm\ApiModule\Api\JsonResponse'
            => 'Crm\ApiModule\Models\Response\JsonResponse',
        'Crm\ApiModule\Api\EmptyResponse'
            => 'Crm\ApiModule\Models\Response\EmptyResponse',
        'Crm\ApiModule\Api\RedirectResponse'
            => 'Crm\ApiModule\Models\Response\RedirectResponse',
        'Crm\ApiModule\Api\XmlResponse'
            => 'Crm\ApiModule\Models\Response\XmlResponse',

        'Crm\ApiModule\Router\ApiIdentifier'
            => 'Crm\ApiModule\Models\Router\ApiIdentifier',
        'Crm\ApiModule\Router\ApiRoute'
            => 'Crm\ApiModule\Models\Router\ApiRoute',
        'Crm\ApiModule\Router\ApiRoutesContainer'
            => 'Crm\ApiModule\Models\Router\ApiRoutesContainer',

        'Crm\ApiModule\Token\InternalToken'
            => 'Crm\ApiModule\Models\Token\InternalToken',

        'Crm\ApiModule\Populator\ApiTokensPopulator'
            => 'Crm\ApiModule\Populators\ApiTokensPopulator',

        // ********************************************************************
        // extensions/apple-appstore-module
        'Crm\AppleAppstoreModule\Components\StopRecurrentPaymentInfoWidget'
            => 'Crm\AppleAppstoreModule\Components\StopRecurrentPaymentInfoWidget\StopRecurrentPaymentInfoWidget',

        'Crm\AppleAppstoreModule\Repository\AppleAppstoreOriginalTransactionsRepository'
            => 'Crm\AppleAppstoreModule\Repositories\AppleAppstoreOriginalTransactionsRepository',
        'Crm\AppleAppstoreModule\Repository\AppleAppstoreServerToServerNotificationLogRepository'
            => 'Crm\AppleAppstoreModule\Repositories\AppleAppstoreServerToServerNotificationLogRepository',
        'Crm\AppleAppstoreModule\Repository\AppleAppstoreSubscriptionTypesRepository'
            => 'Crm\AppleAppstoreModule\Repositories\AppleAppstoreSubscriptionTypesRepository',
        'Crm\AppleAppstoreModule\Repository\AppleAppstoreTransactionDeviceTokensRepository'
            => 'Crm\AppleAppstoreModule\Repositories\AppleAppstoreTransactionDeviceTokensRepository',

        'Crm\AppleAppstoreModule\Model\DoNotRetryException'
            => 'Crm\AppleAppstoreModule\Models\ServerToServerNotificationProcessor\DoNotRetryException',
        'Crm\AppleAppstoreModule\Model\ServerToServerNotificationDateTimesTrait'
            => 'Crm\AppleAppstoreModule\Models\ServerToServerNotificationProcessor\ServerToServerNotificationDateTimesTrait',
        'Crm\AppleAppstoreModule\Model\ServerToServerNotificationLatestReceiptTrait'
            => 'Crm\AppleAppstoreModule\Models\ServerToServerNotificationProcessor\ServerToServerNotificationLatestReceiptTrait',
        'Crm\AppleAppstoreModule\Model\ServerToServerNotificationPendingRenewalTrait'
            => 'Crm\AppleAppstoreModule\Models\ServerToServerNotificationProcessor\ServerToServerNotificationPendingRenewalTrait',
        'Crm\AppleAppstoreModule\Model\ServerToServerNotificationProcessor'
            => 'Crm\AppleAppstoreModule\Models\ServerToServerNotificationProcessor\ServerToServerNotificationProcessor',
        'Crm\AppleAppstoreModule\Model\ServerToServerNotificationProcessorInterface'
            => 'Crm\AppleAppstoreModule\Models\ServerToServerNotificationProcessor\ServerToServerNotificationProcessorInterface',

        'Crm\AppleAppstoreModule\User\AppleAppstoreUserDataProvider'
            => 'Crm\AppleAppstoreModule\Models\User\AppleAppstoreUserDataProvider',

        'Crm\AppleAppstoreModule\Model\AppleAppstoreValidatorFactory'
            => 'Crm\AppleAppstoreModule\Models\AppleAppstoreValidatorFactory',
        'Crm\AppleAppstoreModule\Model\Config'
            => 'Crm\AppleAppstoreModule\Models\Config',
        'Crm\AppleAppstoreModule\Model\LatestReceiptInfo'
            => 'Crm\AppleAppstoreModule\Models\LatestReceiptInfo',
        'Crm\AppleAppstoreModule\Model\PendingRenewalInfo'
            => 'Crm\AppleAppstoreModule\Models\PendingRenewalInfo',
        'Crm\AppleAppstoreModule\Model\ServerToServerNotification'
            => 'Crm\AppleAppstoreModule\Models\ServerToServerNotification',
        'Crm\AppleAppstoreModule\Model\UnifiedReceipt'
            => 'Crm\AppleAppstoreModule\Models\UnifiedReceipt',

        // ********************************************************************
        // extensions/application-module

        // ********************************************************************
        // extensions/coupon-module
        'Crm\CouponModule\DataProvider\FilterUsersFormDataProvider'
            => 'Crm\CouponModule\DataProviders\FilterUsersFormDataProvider',

        'Crm\CouponModule\CannotAssignCouponException'
            => 'Crm\CouponModule\Generator\CannotAssignCouponException',
        'Crm\CouponModule\CouponAlreadyAssignedException'
            => 'Crm\CouponModule\Generator\CouponAlreadyAssignedException',
        'Crm\CouponModule\CouponAlreadyExistsException'
            => 'Crm\CouponModule\Generator\CouponAlreadyExistsException',
        'Crm\CouponModule\CouponExpiredException'
            => 'Crm\CouponModule\Generator\CouponExpiredException',
        'Crm\CouponModule\CouponGeneratorInterface'
            => 'Crm\CouponModule\Generator\CouponGeneratorInterface',
        'Crm\CouponModule\DefaultCouponGenerator'
            => 'Crm\CouponModule\Generator\DefaultCouponGenerator',

        'Crm\CouponModule\Repository\CouponCodesRepository'
            => 'Crm\CouponModule\Repositories\CouponCodesRepository',
        'Crm\CouponModule\Repository\CouponsRepository'
            => 'Crm\CouponModule\Repositories\CouponsRepository',

        'Crm\CouponModule\Repository\SubscriptionHasCouponCodeCriteria'
            => 'Crm\CouponModule\Scenarios\SubscriptionHasCouponCodeCriteria',

        // ********************************************************************
        // extensions/dashboard-module
        // - no changes required

        // ********************************************************************
        // extensions/gifts-module
        'Crm\GiftsModule\Components\DonatedSubscriptionListingWidget'
            => 'Crm\GiftsModule\Components\DonatedSubscriptionListingWidget\DonatedSubscriptionListingWidget',
        'Crm\GiftsModule\Components\GiftCoupons'
            => 'Crm\GiftsModule\Components\GiftCoupons\GiftCoupons',
        'Crm\GiftsModule\Components\GiftPaymentItemsListWidget'
            => 'Crm\GiftsModule\Components\GiftPaymentItemsListWidget\GiftPaymentItemsListWidget',
        'Crm\GiftsModule\Components\OrderDonatedSubscriptionInfo'
            => 'Crm\GiftsModule\Components\OrderDonatedSubscriptionInfo\OrderDonatedSubscriptionInfo',
        'Crm\GiftsModule\Components\PaymentSuccessGiftSubscriptionAddressWidget'
            => 'Crm\GiftsModule\Components\PaymentSuccessGiftSubscriptionAddressWidget\PaymentSuccessGiftSubscriptionAddressWidget',

        'Crm\GiftsModule\DataProvider\CanDeleteAddressDataProvider'
            => 'Crm\GiftsModule\DataProviders\CanDeleteAddressDataProvider',
        'Crm\GiftsModule\DataProvider\PaymentItemTypesFilterDataProvider'
            => 'Crm\GiftsModule\DataProviders\PaymentItemTypesFilterDataProvider',

        'Crm\GiftsModule\PaymentItem\GiftPaymentItem'
            => 'Crm\GiftsModule\Models\PaymentItem\GiftPaymentItem',

        'Crm\GiftsModule\Repository\PaymentGiftCouponsRepository'
            => 'Crm\GiftsModule\Repositories\PaymentGiftCouponsRepository',

        // ********************************************************************
        // extensions/google-play-billing-module
        'Crm\GooglePlayBillingModule\Components\StopRecurrentPaymentButtonWidget'
            => 'Crm\GooglePlayBillingModule\Components\StopRecurrentPaymentButtonWidget\StopRecurrentPaymentButtonWidget',

        'Crm\GooglePlayBillingModule\Repository\DeveloperNotificationsRepository'
            => 'Crm\GooglePlayBillingModule\Repositories\DeveloperNotificationsRepository',
        'Crm\GooglePlayBillingModule\Repository\GooglePlaySubscriptionTypesRepository'
            => 'Crm\GooglePlayBillingModule\Repositories\GooglePlaySubscriptionTypesRepository',
        'Crm\GooglePlayBillingModule\Repository\PurchaseDeviceTokensRepository'
            => 'Crm\GooglePlayBillingModule\Repositories\PurchaseDeviceTokensRepository',
        'Crm\GooglePlayBillingModule\Repository\PurchaseTokensRepository'
            => 'Crm\GooglePlayBillingModule\Repositories\PurchaseTokensRepository',

        'Crm\GooglePlayBillingModule\Model\SubscriptionResponseDateTimesTrait'
            => 'Crm\GooglePlayBillingModule\Models\SubscriptionResponseProcessor\SubscriptionResponseDateTimesTrait',
        'Crm\GooglePlayBillingModule\Model\SubscriptionResponseProcessor'
            => 'Crm\GooglePlayBillingModule\Models\SubscriptionResponseProcessor\SubscriptionResponseProcessor',
        'Crm\GooglePlayBillingModule\Model\SubscriptionResponseProcessorInterface'
            => 'Crm\GooglePlayBillingModule\Models\SubscriptionResponseProcessor\SubscriptionResponseProcessorInterface',

        'Crm\GooglePlayBillingModule\User\GooglePlayUserDataProvider'
            => 'Crm\GooglePlayBillingModule\Models\User\GooglePlayUserDataProvider',
        'Crm\GooglePlayBillingModule\Model\Config'
            => 'Crm\GooglePlayBillingModule\Models\Config',
        'Crm\GooglePlayBillingModule\Model\GooglePlayValidatorFactory'
            => 'Crm\GooglePlayBillingModule\Models\GooglePlayValidatorFactory',

        // ********************************************************************
        // extensions/gopay-module
        'Crm\GoPayModule\Repository\GopayPaymentValues'
            => 'Crm\GoPayModule\Repositories\GopayPaymentValues',
        'Crm\GoPayModule\Repository\GopayPaymentsRepository'
            => 'Crm\GoPayModule\Repositories\GopayPaymentsRepository',

        // ********************************************************************
        // extensions/invoices-module
        'Crm\InvoicesModule\Components\ReceiptAdminButtonFactory'
            => 'Crm\InvoicesModule\Components\DownloadReceiptButton\ReceiptAdminButtonFactory',
        'Crm\InvoicesModule\Components\DownloadReceiptButton'
            => 'Crm\InvoicesModule\Components\DownloadReceiptButton\DownloadReceiptButton',
        'Crm\InvoicesModule\Components\DownloadReceiptButtonFactory'
            => 'Crm\InvoicesModule\Components\DownloadReceiptButton\DownloadReceiptButtonFactory',
        'Crm\InvoicesModule\Components\InvoiceAdminButtonFactory'
            => 'Crm\InvoicesModule\Components\InvoiceButton\InvoiceAdminButtonFactory',
        'Crm\InvoicesModule\Components\InvoiceButton'
            => 'Crm\InvoicesModule\Components\InvoiceButton\InvoiceButton',
        'Crm\InvoicesModule\Components\InvoiceFrontendButtonFactory'
            => 'Crm\InvoicesModule\Components\InvoiceButton\InvoiceFrontendButtonFactory',
        'Crm\InvoicesModule\Components\InvoiceDetailsWidget'
            => 'Crm\InvoicesModule\Components\InvoiceDetailsWidget\InvoiceDetailsWidget',
        'Crm\InvoicesModule\Components\InvoiceLabel'
            => 'Crm\InvoicesModule\Components\InvoiceLabel\InvoiceLabel',
        'Crm\InvoicesModule\Components\PaymentSuccessInvoiceWidget'
            => 'Crm\InvoicesModule\Components\PaymentSuccessInvoiceWidget\PaymentSuccessInvoiceWidget',

        'Crm\InvoicesModule\DataProvider\PaymentInvoiceProvider'
            => 'Crm\InvoicesModule\DataProviders\PaymentInvoiceProvider',
        'Crm\InvoicesModule\DataProvider\UserFormDataProvider'
            => 'Crm\InvoicesModule\DataProviders\UserFormDataProvider',
        'Crm\InvoicesModule\DataProvider\ConfigFormDataProvider'
            => 'Crm\InvoicesModule\DataProviders\ConfigFormDataProvider',

        'Crm\InvoicesModule\InvoiceGenerationException'
            => 'Crm\InvoicesModule\Models\Generator\InvoiceGenerationException',
        'Crm\InvoicesModule\PaymentNotInvoiceableException'
            => 'Crm\InvoicesModule\Models\Generator\PaymentNotInvoiceableException',
        'Crm\InvoicesModule\ReceiptGenerator'
            => 'Crm\InvoicesModule\Models\Generator\ReceiptGenerator',
        'Crm\InvoicesModule\InvoiceGenerator'
            => 'Crm\InvoicesModule\Models\Generator\InvoiceGenerator',

        'Crm\InvoicesModule\Repository\InvoiceItemsRepository'
            => 'Crm\InvoicesModule\Repositories\InvoiceItemsRepository',
        'Crm\InvoicesModule\Repository\InvoicesRepository'
            => 'Crm\InvoicesModule\Repositories\InvoicesRepository',
        'Crm\InvoicesModule\Repository\InvoiceNumbersRepository'
            => 'Crm\InvoicesModule\Repositories\InvoiceNumbersRepository',

        'Crm\InvoicesModule\Sandbox\InvoiceSandbox'
            => 'Crm\InvoicesModule\Models\Sandbox\InvoiceSandbox',
        'Crm\InvoicesModule\Sandbox\InvoiceZipGenerator'
            => 'Crm\InvoicesModule\Models\Sandbox\InvoiceZipGenerator',

        'Crm\InvoicesModule\User\InvoicesUserDataProvider'
            => 'Crm\InvoicesModule\DataProviders\InvoicesUserDataProvider',

        'Crm\InvoicesModule\Repository\InvoiceNumber'
            => 'Crm\InvoicesModule\Models\InvoiceNumber\InvoiceNumber',
        'Crm\InvoicesModule\Model\InvoiceNumberInterface'
            => 'Crm\InvoicesModule\Models\InvoiceNumber\InvoiceNumberInterface',

        // ********************************************************************
        // extensions/issues-module
        'Crm\IssuesModule\Components\SubscriptionTypesWithMagazinesWidget'
            => 'Crm\IssuesModule\Components\SubscriptionTypesWithMagazinesWidget\SubscriptionTypesWithMagazinesWidget',

        'Crm\IssuesModule\Model\ContentAccess'
            => 'Crm\IssuesModule\Models\Content\ContentAccess',
        'Crm\IssuesModule\Model\Issue\FilePatternProcessor'
            => 'Crm\IssuesModule\Models\FilePatternProcessor\FilePatternProcessor',
        'Crm\IssuesModule\Model\IFilePatternProcessor'
            => 'Crm\IssuesModule\Models\FilePatternProcessor\IFilePatternProcessor',

        'Crm\IssuesModule\Pdf\Converter'
            => 'Crm\IssuesModule\Models\Pdf\Converter',
        'Crm\IssuesModule\Pdf\ConverterError'
            => 'Crm\IssuesModule\Models\Pdf\ConverterError',

        'Crm\IssuesModule\Repository\IssueBaseRepository'
            => 'Crm\IssuesModule\Repositories\IssueBaseRepository',
        'Crm\IssuesModule\Repository\IssuePagesRepository'
            => 'Crm\IssuesModule\Repositories\IssuePagesRepository',
        'Crm\IssuesModule\Repository\IssueSourceFilesRepository'
            => 'Crm\IssuesModule\Repositories\IssueSourceFilesRepository',
        'Crm\IssuesModule\Repository\MagazinesRepository'
            => 'Crm\IssuesModule\Repositories\MagazinesRepository',
        'Crm\IssuesModule\Repository\SubscriptionTypeMagazinesRepository'
            => 'Crm\IssuesModule\Repositories\SubscriptionTypeMagazinesRepository',
        'Crm\IssuesModule\Repository\IssuesRepository'
            => 'Crm\IssuesModule\Repositories\IssuesRepository',

        'Crm\IssuesModule\Populator\IssuesPopulator'
            => 'Crm\IssuesModule\Populators\IssuesPopulator',
        'Crm\IssuesModule\Populator\MagazinesPopulator'
            => 'Crm\IssuesModule\Populators\MagazinesPopulator',

        // ********************************************************************
        // extensions/mobiletech-module
        'Crm\MobiletechModule\DataProvider\SubscriptionTypeFormProvider'
            => 'Crm\MobiletechModule\DataProviders\SubscriptionTypeFormProvider',

        'Crm\MobiletechModule\Repository\MobiletechAlreadyExistsException'
            => 'Crm\MobiletechModule\Repositories\MobiletechAlreadyExistsException',
        'Crm\MobiletechModule\Repository\MobiletechInboundMessagesRepository'
            => 'Crm\MobiletechModule\Repositories\MobiletechInboundMessagesRepository',
        'Crm\MobiletechModule\Repository\MobiletechOutboundMessagesRepository'
            => 'Crm\MobiletechModule\Repositories\MobiletechOutboundMessagesRepository',
        'Crm\MobiletechModule\Repository\MobiletechPhoneNumbersRepository'
            => 'Crm\MobiletechModule\Repositories\MobiletechPhoneNumbersRepository',
        'Crm\MobiletechModule\Repository\MobiletechTemplatesRepository'
            => 'Crm\MobiletechModule\Repositories\MobiletechTemplatesRepository',

        // ********************************************************************
        // extensions/muj-dum-module
        'Crm\MujDumModule\Export\Send\ExportDataSource'
            => 'Crm\MujDumModule\Models\Export\Send\ExportDataSource',
        'Crm\MujDumModule\Export\Send\ExportView'
            => 'Crm\MujDumModule\Models\Export\Send\ExportView',

        // ********************************************************************
        // extensions/multicash-module
        'Crm\MulticashModule\MailConfirmation\ParsedXMLLogsRepository'
            => 'Crm\MulticashModule\Repositories\ParsedXMLLogsRepository',

        'Crm\MulticashModule\Builder\ParsedXMLLogsBuilder'
            => 'Crm\MulticashModule\Models\Builder\ParsedXMLLogsBuilder',

        'Crm\MulticashModule\Parser\ParserInterface'
            => 'Crm\MulticashModule\Models\Parser\ParserInterface',
        'Crm\MulticashModule\Parser\XMLBankParser'
            => 'Crm\MulticashModule\Models\Parser\XMLBankParser',
        'Crm\MulticashModule\Parser\XMLCamtParser'
            => 'Crm\MulticashModule\Models\Parser\XMLCamtParser',
        'Crm\MulticashModule\Parser\XMLParserException'
            => 'Crm\MulticashModule\Models\Parser\XMLParserException',

        'Crm\MulticashModule\Processor'
            => 'Crm\MulticashModule\Models\Processor',
        'Crm\MulticashModule\ProcessorException'
            => 'Crm\MulticashModule\Models\ProcessorException',
        'Crm\MulticashModule\XMLContent'
            => 'Crm\MulticashModule\Models\XMLContent',

        // ********************************************************************
        // extensions/onboarding-module
        'Crm\OnboardingModule\Components\OnboardingProgress'
            => 'Crm\OnboardingModule\Components\OnboardingProgress\OnboardingProgress',

        'Crm\OnboardingModule\Repository\OnboardingGoalsRepository'
            => 'Crm\OnboardingModule\Repositories\OnboardingGoalsRepository',
        'Crm\OnboardingModule\Repository\UserOnboardingGoalsRepositoryDuplicateException'
            => 'Crm\OnboardingModule\Repositories\UserOnboardingGoalsRepositoryDuplicateException',
        'Crm\OnboardingModule\Repository\UserOnboardingGoalsRepository'
            => 'Crm\OnboardingModule\Repositories\UserOnboardingGoalsRepository',

        'Crm\OnboardingModule\Tests\OnboardingGoalCreatedAndUpdatedEventHandlerTest'
            => 'Crm\OnboardingModule\Tests\Events\OnboardingGoalCreatedAndUpdatedEventHandlerTest',
        'Crm\OnboardingModule\Tests\SegmentsSeederTest'
            => 'Crm\OnboardingModule\Tests\Seeders\SegmentsSeederTest',

        // ********************************************************************
        // extensions/payments-module
        // ********************************************************************
        // extensions/print-module
        'Crm\PrintModule\Export\ExportCriteria'
            => 'Crm\PrintModule\Models\Export\ExportCriteria',
        'Crm\PrintModule\Export\ExportEngine'
            => 'Crm\PrintModule\Models\Export\ExportEngine',
        'Crm\PrintModule\Export\FileSystem'
            => 'Crm\PrintModule\Models\Export\FileSystem',
        'Crm\PrintModule\Export\SourceInterface'
            => 'Crm\PrintModule\Models\Export\SourceInterface',
        'Crm\PrintModule\Export\ViewInterface'
            => 'Crm\PrintModule\Models\Export\ViewInterface',

        'Crm\PrintModule\Components\EnterAddressWidget'
            => 'Crm\PrintModule\Components\EnterAddressWidget\EnterAddressWidget',
        'Crm\PrintModule\Components\PaymentSuccessPrintWidget'
            => 'Crm\PrintModule\Components\PaymentSuccessPrintWidget\PaymentSuccessPrintWidget',
        'Crm\PrintModule\Components\RequestNotification'
            => 'Crm\PrintModule\Components\RequestNotification\RequestNotification',
        'Crm\PrintModule\Components\UserChangeAddressRequests'
            => 'Crm\PrintModule\Components\UserChangeAddressRequests\UserChangeAddressRequests',
        'Crm\PrintModule\Components\UserPrintExport'
            => 'Crm\PrintModule\Components\UserPrintExport\UserPrintExport',

        'Crm\PrintModule\Repository\PrintSubscriptionsRepository'
            => 'Crm\PrintModule\Repositories\PrintSubscriptionsRepository',

        'Crm\PrintModule\User\AddressChangeRequestsUserDataProvider'
            => 'Crm\PrintModule\DataProviders\User\AddressChangeRequestsUserDataProvider',
        'Crm\PrintModule\User\PrintAddressesUserDataProvider'
            => 'Crm\PrintModule\DataProviders\User\PrintAddressesUserDataProvider',

        'Crm\PrintModule\Populator\AddressChangeRequestsPopulator'
            => 'Crm\PrintModule\Populators\AddressChangeRequestsPopulator',
        'Crm\PrintModule\Populator\AddressesPopulator'
            => 'Crm\PrintModule\Populators\AddressesPopulator',
        'Crm\PrintModule\Populator\PrintSubscriptionsPopulator'
            => 'Crm\PrintModule\Populators\PrintSubscriptionsPopulator',

        // ********************************************************************
        // extensions/privatbankar-module
        'Crm\PrivatbankarModule\Components\ConfirmationPendingWidget'
            => 'Crm\PrivatbankarModule\Components\ConfirmationPendingWidget\ConfirmationPendingWidget',

        // ********************************************************************
        // extensions/products-module
        'Crm\ProductsModule\Components\AvgProductsPaymentWidget'
            => 'Crm\ProductsModule\Components\AvgProductsPaymentWidget\AvgProductsPaymentWidget',
        'Crm\ProductsModule\Components\FreeShippingProgressBarWidget'
            => 'Crm\ProductsModule\Components\FreeShippingProgressBarWidget\FreeShippingProgressBarWidget',
        'Crm\ProductsModule\Components\ProductItemsListWidget'
            => 'Crm\ProductsModule\Components\ProductItemsListWidget\ProductItemsListWidget',
        'Crm\ProductsModule\Components\ProductStatsFactory'
            => 'Crm\ProductsModule\Components\ProductStats\ProductStatsFactory',
        'Crm\ProductsModule\Components\ProductStats'
            => 'Crm\ProductsModule\Components\ProductStats\ProductStats',
        'Crm\ProductsModule\Components\RecommendedProductsWidget'
            => 'Crm\ProductsModule\Components\RecommendedProductsWidget\RecommendedProductsWidget',
        'Crm\ProductsModule\Components\TotalShopPaymentsWidget'
            => 'Crm\ProductsModule\Components\TotalShopPaymentsWidget\TotalShopPaymentsWidget',
        'Crm\ProductsModule\Components\UserOrdersWidget'
            => 'Crm\ProductsModule\Components\UserOrdersWidget\UserOrdersWidget',

        'Crm\PaymentsModule\DataProvider\CheckoutFormDataProviderInterface'
            => 'Crm\ProductsModule\DataProviders\CheckoutFormDataProviderInterface',
        'Crm\ProductsModule\DataProvider\PaymentFormDataProvider'
            => 'Crm\ProductsModule\DataProviders\PaymentFormDataProvider',
        'Crm\ProductsModule\DataProvider\PaymentItemTypesFilterDataProvider'
            => 'Crm\ProductsModule\DataProviders\PaymentItemTypesFilterDataProvider',
        'Crm\ProductsModule\DataProvider\PaymentsAdminFilterFormDataProvider'
            => 'Crm\ProductsModule\DataProviders\PaymentsAdminFilterFormDataProvider',
        'Crm\ProductsModule\DataProvider\ProductManagerDataProviderInterface'
            => 'Crm\ProductsModule\DataProviders\ProductManagerDataProviderInterface',
        'Crm\ProductsModule\DataProvider\ProductTemplatePropertiesDataProviderInterface'
            => 'Crm\ProductsModule\DataProviders\ProductTemplatePropertiesDataProviderInterface',
        'Crm\ProductsModule\DataProvider\ProductsFormDataProviderInterface'
            => 'Crm\ProductsModule\DataProviders\ProductsFormDataProviderInterface',
        'Crm\ProductsModule\DataProvider\SortShopProductsFormValidationDataProviderInterface'
            => 'Crm\ProductsModule\DataProviders\SortShopProductsFormValidationDataProviderInterface',
        'Crm\ProductsModule\DataProvider\TrackerDataProviderInterface'
            => 'Crm\ProductsModule\DataProviders\TrackerDataProviderInterface',

        'Crm\ProductsModule\Builder\ProductBuilder'
            => 'Crm\ProductsModule\Models\Builder\ProductBuilder',

        'Crm\ProductsModule\Distribution\ProductDaysFromLastOrderDistribution'
            => 'Crm\ProductsModule\Models\Distribution\ProductDaysFromLastOrderDistribution',
        'Crm\ProductsModule\Distribution\ProductSaveEventDistributionException'
            => 'Crm\ProductsModule\Models\Distribution\ProductSaveEventDistributionException',
        'Crm\ProductsModule\Distribution\AmountSpentDistribution'
            => 'Crm\ProductsModule\Models\Distribution\AmountSpentDistribution',
        'Crm\ProductsModule\Distribution\DistributionInterface'
            => 'Crm\ProductsModule\Models\Distribution\DistributionInterface',
        'Crm\ProductsModule\Distribution\PaymentCountsDistribution'
            => 'Crm\ProductsModule\Models\Distribution\PaymentCountsDistribution',
        'Crm\ProductsModule\Distribution\ProductShopCountsDistribution'
            => 'Crm\ProductsModule\Models\Distribution\ProductShopCountsDistribution',

        'Crm\ProductsModule\Ebook\EbookProvider'
            => 'Crm\ProductsModule\DataProviders\EbookProvider',
        'Crm\ProductsModule\Ebook\EbookProviderInterface'
            => 'Crm\ProductsModule\DataProviders\EbookProviderInterface',

        'Crm\ProductsModule\Manager\ProductManager'
            => 'Crm\ProductsModule\Models\Manager\ProductManager',

        'Crm\ProductsModule\PaymentItem\PaymentItemHelper'
            => 'Crm\ProductsModule\Models\PaymentItem\PaymentItemHelper',
        'Crm\ProductsModule\PaymentItem\PostalFeePaymentItem'
            => 'Crm\ProductsModule\Models\PaymentItem\PostalFeePaymentItem',
        'Crm\ProductsModule\PaymentItem\ProductPaymentItem'
            => 'Crm\ProductsModule\Models\PaymentItem\ProductPaymentItem',

        'Crm\ProductsModule\PostalFeeCondition\PostalFeeConditionInterface'
            => 'Crm\ProductsModule\Models\PostalFeeCondition\PostalFeeConditionInterface',
        'Crm\ProductsModule\PostalFeeCondition\PostalFeeMessageConditionInterface'
            => 'Crm\ProductsModule\Models\PostalFeeCondition\PostalFeeMessageConditionInterface',
        'Crm\ProductsModule\PostalFeeCondition\PostalFeeNumericConditionInterface'
            => 'Crm\ProductsModule\Models\PostalFeeCondition\PostalFeeNumericConditionInterface',
        'Crm\ProductsModule\PostalFeeCondition\PostalFeeService'
            => 'Crm\ProductsModule\Models\PostalFeeCondition\PostalFeeService',
        'Crm\ProductsModule\PostalFeeCondition\ProductSumCondition'
            => 'Crm\ProductsModule\Models\PostalFeeCondition\ProductSumCondition',
        'Crm\ProductsModule\PostalFeeCondition\UserSegmentCondition'
            => 'Crm\ProductsModule\Models\PostalFeeCondition\UserSegmentCondition',

        'Crm\ProductsModule\Repository\PostalFeesRepository'
            => 'Crm\ProductsModule\Repositories\PostalFeesRepository',
        'Crm\ProductsModule\Repository\ProductBundlesRepository'
            => 'Crm\ProductsModule\Repositories\ProductBundlesRepository',
        'Crm\ProductsModule\Repository\ProductPropertiesRepository'
            => 'Crm\ProductsModule\Repositories\ProductPropertiesRepository',
        'Crm\ProductsModule\Repository\ProductTagsRepository'
            => 'Crm\ProductsModule\Repositories\ProductTagsRepository',
        'Crm\ProductsModule\Repository\ProductTemplatePropertiesRepository'
            => 'Crm\ProductsModule\Repositories\ProductTemplatePropertiesRepository',
        'Crm\ProductsModule\Repository\ProductTemplatesRepository'
            => 'Crm\ProductsModule\Repositories\ProductTemplatesRepository',
        'Crm\ProductsModule\Repository\CountryPostalFeeConditionsRepository'
            => 'Crm\ProductsModule\Repositories\CountryPostalFeeConditionsRepository',
        'Crm\ProductsModule\Repository\CountryPostalFeesRepository'
            => 'Crm\ProductsModule\Repositories\CountryPostalFeesRepository',
        'Crm\ProductsModule\Repository\TagsRepository'
            => 'Crm\ProductsModule\Repositories\TagsRepository',
        'Crm\ProductsModule\Repository\DistributionCentersRepository'
            => 'Crm\ProductsModule\Repositories\DistributionCentersRepository',
        'Crm\ProductsModule\Repository\OrdersRepository'
            => 'Crm\ProductsModule\Repositories\OrdersRepository',
        'Crm\ProductsModule\Repository\ProductsRepository'
            => 'Crm\ProductsModule\Repositories\ProductsRepository',

        'Crm\ProductsModule\User\OrdersUserDataProvider'
            => 'Crm\ProductsModule\DataProviders\OrdersUserDataProvider',

        'Crm\ProductsModule\ProductsCache'
            => 'Crm\ProductsModule\Models\ProductsCache',
        'Crm\ProductsModule\Model\ProductsTrait'
            => 'Crm\ProductsModule\Models\ProductsTrait',
        'Crm\ProductsModule\Model\ShopPaymentCompleteRedirectResolver'
            => 'Crm\ProductsModule\Models\ShopPaymentCompleteRedirectResolver',
        'Crm\ProductsModule\TagsCache'
            => 'Crm\ProductsModule\Models\TagsCache',
        'Crm\ProductsModule\Model\Config'
            => 'Crm\ProductsModule\Models\Config',

        // ********************************************************************
        // extensions/salesfunnel-module
        'Crm\SalesFunnelModule\Components\AmountDistributionWidget'
            => 'Crm\SalesFunnelModule\Components\AmountDistributionWidget\AmountDistributionWidget',
        'Crm\SalesFunnelModule\Components\AmountDistributionWidgetFactory'
            => 'Crm\SalesFunnelModule\Components\AmountDistributionWidget\AmountDistributionWidgetFactory',
        'Crm\SalesFunnelModule\Components\DaysFromLastSubscriptionDistributionWidget'
            => 'Crm\SalesFunnelModule\Components\DaysFromLastSubscriptionDistributionWidget\DaysFromLastSubscriptionDistributionWidget',
        'Crm\SalesFunnelModule\Components\DaysFromLastSubscriptionDistributionWidgetFactory'
            => 'Crm\SalesFunnelModule\Components\DaysFromLastSubscriptionDistributionWidget\DaysFromLastSubscriptionDistributionWidgetFactory',
        'Crm\SalesFunnelModule\Components\FinishRegistrationWidget'
            => 'Crm\SalesFunnelModule\Components\FinishRegistrationWidget\FinishRegistrationWidget',
        'Crm\SalesFunnelModule\Components\NewSubscriptionWidget'
            => 'Crm\SalesFunnelModule\Components\NewSubscriptionWidget\NewSubscriptionWidget',
        'Crm\SalesFunnelModule\Components\PaymentDistributionWidget'
            => 'Crm\SalesFunnelModule\Components\PaymentDistributionWidget\PaymentDistributionWidget',
        'Crm\SalesFunnelModule\Components\PaymentDistributionWidgetFactory'
            => 'Crm\SalesFunnelModule\Components\PaymentDistributionWidget\PaymentDistributionWidgetFactory',
        'Crm\SalesFunnelModule\Components\SalesFunnelUserListingWidget'
            => 'Crm\SalesFunnelModule\Components\SalesFunnelUserListingWidget\SalesFunnelUserListingWidget',
        'Crm\SalesFunnelModule\Components\SubscriptionTypesInSalesFunnelsWidget'
            => 'Crm\SalesFunnelModule\Components\SubscriptionTypesInSalesFunnelsWidget\SubscriptionTypesInSalesFunnelsWidget',
        'Crm\SalesFunnelModule\Components\WindowPreview'
            => 'Crm\SalesFunnelModule\Components\WindowPreview\WindowPreview',
        'Crm\SalesFunnelModule\Components\WindowPreviewControlFactoryInterface'
            => 'Crm\SalesFunnelModule\Components\WindowPreview\WindowPreviewControlFactoryInterface',

        'Crm\SalesFunnelModule\DataProvider\PaymentsAdminFilterFormDataProvider'
            => 'Crm\SalesFunnelModule\DataProviders\PaymentsAdminFilterFormDataProvider',
        'Crm\SalesFunnelModule\DataProvider\RetentionAnalysisDataProvider'
            => 'Crm\SalesFunnelModule\DataProviders\RetentionAnalysisDataProvider',
        'Crm\SalesFunnelModule\DataProvider\SalesFunnelPaymentFormDataProviderInterface'
            => 'Crm\SalesFunnelModule\DataProviders\SalesFunnelPaymentFormDataProviderInterface',
        'Crm\SalesFunnelModule\DataProvider\SalesFunnelVariablesDataProviderInterface'
            => 'Crm\SalesFunnelModule\DataProviders\SalesFunnelVariablesDataProviderInterface',
        'Crm\SalesFunnelModule\DataProvider\TrackerDataProviderInterface'
            => 'Crm\SalesFunnelModule\DataProviders\TrackerDataProviderInterface',
        'Crm\SalesFunnelModule\DataProvider\ValidateUserFunnelAccessDataProviderInterface'
            => 'Crm\SalesFunnelModule\DataProviders\ValidateUserFunnelAccessDataProviderInterface',

        'Crm\SalesFunnelModule\Distribution\AbstractFunnelDistribution'
            => 'Crm\SalesFunnelModule\Models\Distribution\AbstractFunnelDistribution',
        'Crm\SalesFunnelModule\Distribution\DistributionInterface'
            => 'Crm\SalesFunnelModule\Models\Distribution\DistributionInterface',
        'Crm\SalesFunnelModule\Distribution\PaymentsCountDistribution'
            => 'Crm\SalesFunnelModule\Models\Distribution\PaymentsCountDistribution',
        'Crm\SalesFunnelModule\Distribution\PaymentsSumDistribution'
            => 'Crm\SalesFunnelModule\Models\Distribution\PaymentsSumDistribution',
        'Crm\SalesFunnelModule\Distribution\SubscriptionDaysDistribution'
            => 'Crm\SalesFunnelModule\Models\Distribution\SubscriptionDaysDistribution',

        'Crm\SalesFunnelModule\SalesFunnelAlreadyExistsException'
            => 'Crm\SalesFunnelModule\Repositories\SalesFunnelAlreadyExistsException',
        'Crm\SalesFunnelModule\SalesFunnelsConversionDistributionsRepository'
            => 'Crm\SalesFunnelModule\Repositories\SalesFunnelsConversionDistributionsRepository',
        'Crm\SalesFunnelModule\Repository\SalesFunnelsMetaRepository'
            => 'Crm\SalesFunnelModule\Repositories\SalesFunnelsMetaRepository',
        'Crm\SalesFunnelModule\Repository\SalesFunnelsPaymentGatewaysRepository'
            => 'Crm\SalesFunnelModule\Repositories\SalesFunnelsPaymentGatewaysRepository',
        'Crm\SalesFunnelModule\Repository\SalesFunnelsRepository'
            => 'Crm\SalesFunnelModule\Repositories\SalesFunnelsRepository',
        'Crm\SalesFunnelModule\Repository\SalesFunnelsStatsRepository'
            => 'Crm\SalesFunnelModule\Repositories\SalesFunnelsStatsRepository',
        'Crm\SalesFunnelModule\Repository\SalesFunnelsSubscriptionTypesRepository'
            => 'Crm\SalesFunnelModule\Repositories\SalesFunnelsSubscriptionTypesRepository',
        'Crm\SalesFunnelModule\Repository\SalesFunnelTagsRepository'
            => 'Crm\SalesFunnelModule\Repositories\SalesFunnelTagsRepository',

        'Crm\SalesFunnelModule\SalesFunnelPaymentCompleteRedirectResolver'
            => 'Crm\SalesFunnelModule\Models\SalesFunnelPaymentCompleteRedirectResolver',
        'Crm\SalesFunnelModule\SalesFunnelsCache'
            => 'Crm\SalesFunnelModule\Models\SalesFunnelsCache',

        // ********************************************************************
        // extensions/scenarios-module
        'Crm\ScenariosModule\Repository\GeneratedEventsRepository'
            => 'Crm\ScenariosModule\Repositories\GeneratedEventsRepository',
        'Crm\ScenariosModule\Repository\ScenarioInvalidDataException'
            => 'Crm\ScenariosModule\Repositories\ScenarioInvalidDataException',
        'Crm\ScenariosModule\Repository\SelectedVariantsRepository'
            => 'Crm\ScenariosModule\Repositories\SelectedVariantsRepository',
        'Crm\ScenariosModule\Repository\ElementElementsRepository'
            => 'Crm\ScenariosModule\Repositories\ElementElementsRepository',
        'Crm\ScenariosModule\Repository\TriggerElementsRepository'
            => 'Crm\ScenariosModule\Repositories\TriggerElementsRepository',
        'Crm\ScenariosModule\Repository\ElementStatsRepository'
            => 'Crm\ScenariosModule\Repositories\ElementStatsRepository',
        'Crm\ScenariosModule\Repository\TriggerStatsRepository'
            => 'Crm\ScenariosModule\Repositories\TriggerStatsRepository',
        'Crm\ScenariosModule\Repository\TriggersRepository'
            => 'Crm\ScenariosModule\Repositories\TriggersRepository',
        'Crm\ScenariosModule\Repository\ElementsRepository'
            => 'Crm\ScenariosModule\Repositories\ElementsRepository',
        'Crm\ScenariosModule\Repository\JobsRepository'
            => 'Crm\ScenariosModule\Repositories\JobsRepository',
        'Crm\ScenariosModule\Repository\ScenariosRepository'
            => 'Crm\ScenariosModule\Repositories\ScenariosRepository',

        'Crm\Scenarios\Test\HasPaymentCriteriaTest'
            => 'Crm\ScenariosModule\Tests\HasPaymentCriteriaTest',

        // ********************************************************************
        // extensions/segment-module
        // ********************************************************************
        // extensions/slsp-sporopay-module
        'Crm\SlspSporopayModule\MailParser\SlspMailParser'
            => 'Crm\SlspSporopayModule\Models\MailParser\SlspMailParser',
        'Crm\SlspSporopayModule\MailParser\SlspNotificationMailParser'
            => 'Crm\SlspSporopayModule\Models\MailParser\SlspNotificationMailParser',

        // ********************************************************************
        // extensions/subscriptions-module
        // ********************************************************************
        // extensions/upgrades-module
        // ********************************************************************
        // extensions/users-module
        // ********************************************************************
        // extensions/vub-eplatby-module
        'Crm\VubEplatbyModule\MailParser\VubMailParser'
            => 'Crm\VubEplatbyModule\Models\MailParser\VubMailParser',

        // ********************************************************************
        // extensions/wordpress-module
        'Crm\WordpressModule\Model\ApiClient'
            => 'Crm\WordpressModule\Models\ApiClient',

        'Crm\WordpressModule\Repository\WordpressUsersRepository'
            => 'Crm\WordpressModule\Repositories\WordpressUsersRepository',
    ]);
};
