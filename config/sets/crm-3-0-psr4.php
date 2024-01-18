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
        'Crm\SegmentsModule\Widget\DashboardSegmentValueBaseWidget'
            => 'Crm\SegmentModule\Components\DashboardSegmentValueBaseWidget\DashboardSegmentValueBaseWidget',

        'Crm\SegmentModule\Criteria\EmptyCriteriaException'
            => 'Crm\SegmentModule\Models\Criteria\EmptyCriteriaException',
        'Crm\SegmentModule\Criteria\Fields'
            => 'Crm\SegmentModule\Models\Criteria\Fields',
        'Crm\SegmentModule\Criteria\Generator'
            => 'Crm\SegmentModule\Models\Criteria\Generator',
        'Crm\SegmentModule\Criteria\InvalidCriteriaException'
            => 'Crm\SegmentModule\Models\Criteria\InvalidCriteriaException',

        'Crm\SegmentModule\Params\BaseParam'
            => 'Crm\SegmentModule\Models\Params\BaseParam',
        'Crm\SegmentModule\Params\BooleanParam'
            => 'Crm\SegmentModule\Models\Params\BooleanParam',
        'Crm\SegmentModule\Params\DecimalParam'
            => 'Crm\SegmentModule\Models\Params\DecimalParam',
        'Crm\SegmentModule\Params\InvalidParamException'
            => 'Crm\SegmentModule\Models\Params\InvalidParamException',
        'Crm\SegmentModule\Params\NumberArrayParam'
            => 'Crm\SegmentModule\Models\Params\NumberArrayParam',
        'Crm\SegmentModule\Params\NumberParam'
            => 'Crm\SegmentModule\Models\Params\NumberParam',
        'Crm\SegmentModule\Params\ParamsBag'
            => 'Crm\SegmentModule\Models\Params\ParamsBag',
        'Crm\SegmentModule\Params\StringArrayParam'
            => 'Crm\SegmentModule\Models\Params\StringArrayParam',
        'Crm\SegmentModule\Params\StringParam'
            => 'Crm\SegmentModule\Models\Params\StringParam',
        'Crm\SegmentModule\Params\Validation'
            => 'Crm\SegmentModule\Models\Params\Validation',
        'Crm\SegmentModule\Params\DateTimeParam'
            => 'Crm\SegmentModule\Models\Params\DateTimeParam',

        'Crm\SegmentModule\Repository\SegmentAlreadyExistsException'
            => 'Crm\SegmentModule\Repositories\SegmentAlreadyExistsException',
        'Crm\SegmentModule\Repository\SegmentGroupsRepository'
            => 'Crm\SegmentModule\Repositories\SegmentGroupsRepository',
        'Crm\SegmentModule\Repository\SegmentsRepository'
            => 'Crm\SegmentModule\Repositories\SegmentsRepository',
        'Crm\SegmentModule\Repository\SegmentsValuesRepository'
            => 'Crm\SegmentModule\Repositories\SegmentsValuesRepository',

        'Crm\SegmentModule\QueryInterface'
            => 'Crm\SegmentModule\Models\QueryInterface',
        'Crm\SegmentModule\Segment'
            => 'Crm\SegmentModule\Models\Segment',
        'Crm\SegmentModule\SegmentFactory'
            => 'Crm\SegmentModule\Models\SegmentFactory',
        'Crm\SegmentModule\SegmentFactoryInterface'
            => 'Crm\SegmentModule\Models\SegmentFactoryInterface',
        'Crm\SegmentModule\SegmentInterface'
            => 'Crm\SegmentModule\Models\SegmentInterface',
        'Crm\SegmentModule\SegmentQuery'
            => 'Crm\SegmentModule\Models\SegmentQuery',
        'Crm\SegmentModule\SegmentWidgetInterface'
            => 'Crm\SegmentModule\Models\SegmentWidgetInterface',

        'Crm\SegmentsModule\Tests\SegmentQueryTest'
            => 'Crm\SegmentModule\Tests\SegmentQueryTest',

        // ********************************************************************
        // extensions/slsp-sporopay-module
        'Crm\SlspSporopayModule\MailParser\SlspMailParser'
            => 'Crm\SlspSporopayModule\Models\MailParser\SlspMailParser',
        'Crm\SlspSporopayModule\MailParser\SlspNotificationMailParser'
            => 'Crm\SlspSporopayModule\Models\MailParser\SlspNotificationMailParser',

        // ********************************************************************
        // extensions/subscriptions-module
        'Crm\SubscriptionsModule\Components\IWidgetLegend'
            => 'Crm\SubscriptionsModule\Components\WidgetLegendInterface',

        'Crm\SubscriptionsModule\Components\ActualSubscribersRegistrationSourceStatsWidget'
            => 'Crm\SubscriptionsModule\Components\ActualSubscribersRegistrationSourceStatsWidget\ActualSubscribersRegistrationSourceStatsWidget',
        'Crm\SubscriptionsModule\Components\ActualSubscribersStatWidget'
            => 'Crm\SubscriptionsModule\Components\ActualSubscribersStatWidget\ActualSubscribersStatWidget',
        'Crm\SubscriptionsModule\Components\ActualSubscriptionsStatWidget'
            => 'Crm\SubscriptionsModule\Components\ActualSubscriptionsStatWidget\ActualSubscriptionsStatWidget',
        'Crm\SubscriptionsModule\Components\ActualUserSubscriptions'
            => 'Crm\SubscriptionsModule\Components\ActualUserSubscriptions\ActualUserSubscriptions',
        'Crm\SubscriptionsModule\Components\EndingSubscriptionsWidgetFactoryInterface'
            => 'Crm\SubscriptionsModule\Components\EndingSubscriptionsWidget\EndingSubscriptionsWidgetFactoryInterface',
        'Crm\SubscriptionsModule\Components\EndingSubscriptionsWidget'
            => 'Crm\SubscriptionsModule\Components\EndingSubscriptionsWidget\EndingSubscriptionsWidget',
        'Crm\SubscriptionsModule\Components\MonthSubscriptionsStatWidget'
            => 'Crm\SubscriptionsModule\Components\MonthSubscriptionsStatWidget\MonthSubscriptionsStatWidget',
        'Crm\SubscriptionsModule\Components\MonthSubscriptionsSmallBarGraphWidget'
            => 'Crm\SubscriptionsModule\Components\MonthSubscriptionsSmallBarGraphWidget\MonthSubscriptionsSmallBarGraphWidget',
        'Crm\SubscriptionsModule\Components\MonthToDateSubscriptionsStatWidget'
            => 'Crm\SubscriptionsModule\Components\MonthToDateSubscriptionsStatWidget\MonthToDateSubscriptionsStatWidget',
        'Crm\SubscriptionsModule\Components\SubscribersWithMissingAddressWidget'
            => 'Crm\SubscriptionsModule\Components\PrintSubscribersWithoutPrintAddressWidget\PrintSubscribersWithoutPrintAddressWidget',
        'Crm\SubscriptionsModule\Components\RenewedSubscriptionsEndingWithinPeriodWidget'
            => 'Crm\SubscriptionsModule\Components\RenewedSubscriptionsEndingWithinPeriodWidget\RenewedSubscriptionsEndingWithinPeriodWidget',
        'Crm\SubscriptionsModule\Components\StopSubscriptionWidget'
            => 'Crm\SubscriptionsModule\Components\StopSubscriptionWidget\StopSubscriptionWidget',
        'Crm\SubscriptionsModule\Components\SubscriptionButton'
            => 'Crm\SubscriptionsModule\Components\SubscriptionButton\SubscriptionButton',
        'Crm\SubscriptionsModule\Components\SubscriptionEndsStatsFactoryInterface'
            => 'Crm\SubscriptionsModule\Components\SubscriptionEndsStats\SubscriptionEndsStatsFactoryInterface',
        'Crm\SubscriptionsModule\Components\SubscriptionEndsStats'
            => 'Crm\SubscriptionsModule\Components\SubscriptionEndsStats\SubscriptionEndsStats',
        'Crm\SubscriptionsModule\Components\SubscriptionsEndingWithinPeriodWidget'
            => 'Crm\SubscriptionsModule\Components\SubscriptionsEndingWithinPeriodWidget\SubscriptionsEndingWithinPeriodWidget',
        'Crm\SubscriptionsModule\Components\TodaySubscriptionsStatWidget'
            => 'Crm\SubscriptionsModule\Components\TodaySubscriptionsStatWidget\TodaySubscriptionsStatWidget',
        'Crm\SubscriptionsModule\Components\TotalSubscriptionsStatWidget'
            => 'Crm\SubscriptionsModule\Components\TotalSubscriptionsStatWidget\TotalSubscriptionsStatWidget',
        'Crm\SubscriptionsModule\Components\UserSubscriptionInfoWidget'
            => 'Crm\SubscriptionsModule\Components\UserSubscriptionInfoWidget\UserSubscriptionInfoWidget',
        'Crm\SubscriptionsModule\Components\UserSubscriptionsListing'
            => 'Crm\SubscriptionsModule\Components\UserSubscriptionsListing\UserSubscriptionsListing',
        'Crm\SubscriptionsModule\Components\UsersAbusiveAdditionalWidget'
            => 'Crm\SubscriptionsModule\Components\UsersAbusiveAdditionalWidget\UsersAbusiveAdditionalWidget',
        'Crm\SubscriptionsModule\Components\SubscriptionEndsSuppressionWidget'
            => 'Crm\SubscriptionsModule\Components\SubscriptionEndsSuppressionWidget\SubscriptionEndsSuppressionWidget',

        'Crm\SubscriptionsModule\DataProvider\EndingSubscriptionsDataProviderInterface'
            => 'Crm\SubscriptionsModule\DataProviders\EndingSubscriptionsDataProviderInterface',
        'Crm\SubscriptionsModule\DataProvider\FilterAbusiveUserFormDataProvider'
            => 'Crm\SubscriptionsModule\DataProviders\FilterAbusiveUserFormDataProvider',
        'Crm\SubscriptionsModule\DataProvider\FilterUserActionLogsFormDataProvider'
            => 'Crm\SubscriptionsModule\DataProviders\FilterUserActionLogsFormDataProvider',
        'Crm\SubscriptionsModule\DataProvider\FilterUserActionLogsSelectionDataProvider'
            => 'Crm\SubscriptionsModule\DataProviders\FilterUserActionLogsSelectionDataProvider',
        'Crm\SubscriptionsModule\DataProvider\FilterUsersFormDataProvider'
            => 'Crm\SubscriptionsModule\DataProviders\FilterUsersFormDataProvider',
        'Crm\SubscriptionsModule\DataProvider\PaymentFromVariableSymbolDataProviderInterface'
            => 'Crm\SubscriptionsModule\DataProviders\PaymentFromVariableSymbolDataProviderInterface',
        'Crm\SubscriptionsModule\DataProvider\SubscriptionAccessStatsDataProviderInterface'
            => 'Crm\SubscriptionsModule\DataProviders\SubscriptionAccessStatsDataProviderInterface',
        'Crm\SubscriptionsModule\DataProvider\SubscriptionFormDataProviderInterface'
            => 'Crm\SubscriptionsModule\DataProviders\SubscriptionFormDataProviderInterface',
        'Crm\SubscriptionsModule\DataProvider\SubscriptionTypeFormProviderInterface'
            => 'Crm\SubscriptionsModule\DataProviders\SubscriptionTypeFormProviderInterface',
        'Crm\SubscriptionsModule\DataProvider\SubscriptionsClaimUserDataProvider'
            => 'Crm\SubscriptionsModule\DataProviders\SubscriptionsClaimUserDataProvider',
        'Crm\SubscriptionsModule\DataProvider\CanDeleteAddressDataProvider'
            => 'Crm\SubscriptionsModule\DataProviders\CanDeleteAddressDataProvider',
        'Crm\SubscriptionsModule\DataProvider\CanUpdateSubscriptionTypeItemDataProviderInterface'
            => 'Crm\SubscriptionsModule\DataProviders\CanUpdateSubscriptionTypeItemDataProviderInterface',

        'Crm\SubscriptionsModule\Builder\SubscriptionTypeBuilder'
            => 'Crm\SubscriptionsModule\Models\Builder\SubscriptionTypeBuilder',

        'Crm\SubscriptionsModule\Extension\ExtendActualExtension'
            => 'Crm\SubscriptionsModule\Models\Extension\ExtendActualExtension',
        'Crm\SubscriptionsModule\Extension\ExtendLastExtension'
            => 'Crm\SubscriptionsModule\Models\Extension\ExtendLastExtension',
        'Crm\SubscriptionsModule\Extension\ExtendSameActualExtension'
            => 'Crm\SubscriptionsModule\Models\Extension\ExtendSameActualExtension',
        'Crm\SubscriptionsModule\Extension\ExtendSameContentAccess'
            => 'Crm\SubscriptionsModule\Models\Extension\ExtendSameContentAccess',
        'Crm\SubscriptionsModule\Extension\ExtendSameTypeExtension'
            => 'Crm\SubscriptionsModule\Models\Extension\ExtendSameTypeExtension',
        'Crm\SubscriptionsModule\Extension\Extension'
            => 'Crm\SubscriptionsModule\Models\Extension\Extension',
        'Crm\SubscriptionsModule\Extension\ExtensionInterface'
            => 'Crm\SubscriptionsModule\Models\Extension\ExtensionInterface',
        'Crm\SubscriptionsModule\Extension\ExtensionMethodFactory'
            => 'Crm\SubscriptionsModule\Models\Extension\ExtensionMethodFactory',
        'Crm\SubscriptionsModule\Extension\StartNowExtension'
            => 'Crm\SubscriptionsModule\Models\Extension\StartNowExtension',

        'Crm\SubscriptionsModule\Generator\SubscriptionsGenerator'
            => 'Crm\SubscriptionsModule\Models\Generator\SubscriptionsGenerator',
        'Crm\SubscriptionsModule\Generator\SubscriptionsParams'
            => 'Crm\SubscriptionsModule\Models\Generator\SubscriptionsParams',

        'Crm\SubscriptionsModule\Length\CalendarDaysLengthMethod'
            => 'Crm\SubscriptionsModule\Models\Length\CalendarDaysLengthMethod',
        'Crm\SubscriptionsModule\Length\FixDaysLengthMethod'
            => 'Crm\SubscriptionsModule\Models\Length\FixDaysLengthMethod',
        'Crm\SubscriptionsModule\Length\Length'
            => 'Crm\SubscriptionsModule\Models\Length\Length',
        'Crm\SubscriptionsModule\Length\LengthMethodFactory'
            => 'Crm\SubscriptionsModule\Models\Length\LengthMethodFactory',
        'Crm\SubscriptionsModule\Length\LengthMethodInterface'
            => 'Crm\SubscriptionsModule\Models\Length\LengthMethodInterface',

        'Crm\SubscriptionsModule\PaymentItem\SubscriptionTypePaymentItem'
            => 'Crm\SubscriptionsModule\Models\PaymentItem\SubscriptionTypePaymentItem',

        'Crm\SubscriptionsModule\Report\UserSourceGroup'
            => 'Crm\SubscriptionsModule\Models\Report\UserSourceGroup',
        'Crm\SubscriptionsModule\Report\BaseReport'
            => 'Crm\SubscriptionsModule\Models\Report\BaseReport',
        'Crm\SubscriptionsModule\Report\ReportGroup'
            => 'Crm\SubscriptionsModule\Models\Report\ReportGroup',
        'Crm\SubscriptionsModule\Report\ReportInterface'
            => 'Crm\SubscriptionsModule\Models\Report\ReportInterface',
        'Crm\SubscriptionsModule\Report\ReportTable'
            => 'Crm\SubscriptionsModule\Models\Report\ReportTable',

        'Crm\SubscriptionsModule\Repository\ContentAccessRepository'
            => 'Crm\SubscriptionsModule\Repositories\ContentAccessRepository',
        'Crm\SubscriptionsModule\Repository\SubscriptionExtensionMethodsRepository'
            => 'Crm\SubscriptionsModule\Repositories\SubscriptionExtensionMethodsRepository',
        'Crm\SubscriptionsModule\Repository\SubscriptionLengthMethodsRepository'
            => 'Crm\SubscriptionsModule\Repositories\SubscriptionLengthMethodsRepository',
        'Crm\SubscriptionsModule\Repository\SubscriptionMetaRepository'
            => 'Crm\SubscriptionsModule\Repositories\SubscriptionMetaRepository',
        'Crm\SubscriptionsModule\Repository\SubscriptionTypeContentAccessRepository'
            => 'Crm\SubscriptionsModule\Repositories\SubscriptionTypeContentAccessRepository',
        'Crm\SubscriptionsModule\Repository\SubscriptionTypeItemMetaRepository'
            => 'Crm\SubscriptionsModule\Repositories\SubscriptionTypeItemMetaRepository',
        'Crm\SubscriptionsModule\Repository\SubscriptionTypeItemsRepository'
            => 'Crm\SubscriptionsModule\Repositories\SubscriptionTypeItemsRepository',
        'Crm\SubscriptionsModule\Repository\SubscriptionTypeNamesRepository'
            => 'Crm\SubscriptionsModule\Repositories\SubscriptionTypeNamesRepository',
        'Crm\SubscriptionsModule\Repository\SubscriptionTypeTagsRepository'
            => 'Crm\SubscriptionsModule\Repositories\SubscriptionTypeTagsRepository',
        'Crm\SubscriptionsModule\Repository\SubscriptionTypesMetaRepository'
            => 'Crm\SubscriptionsModule\Repositories\SubscriptionTypesMetaRepository',
        'Crm\SubscriptionsModule\Repository\SubscriptionTypesRepository'
            => 'Crm\SubscriptionsModule\Repositories\SubscriptionTypesRepository',
        'Crm\SubscriptionsModule\Repository\SubscriptionsRepository'
            => 'Crm\SubscriptionsModule\Repositories\SubscriptionsRepository',

        'Crm\SubscriptionsModule\Subscription\SubscriptionTypeHelper'
            => 'Crm\SubscriptionsModule\Models\Subscription\SubscriptionTypeHelper',
        'Crm\SubscriptionsModule\Subscription\ActualUserSubscription'
            => 'Crm\SubscriptionsModule\Models\Subscription\ActualUserSubscription',
        'Crm\SubscriptionsModule\Subscription\StopSubscriptionHandler'
            => 'Crm\SubscriptionsModule\Models\Subscription\StopSubscriptionHandler',
        'Crm\SubscriptionsModule\Subscription\SubscriptionEndsSuppressionManager'
            => 'Crm\SubscriptionsModule\Models\Subscription\SubscriptionEndsSuppressionManager',

        'Crm\SubscriptionsModule\User\SubscriptionsUserDataProvider'
            => 'Crm\SubscriptionsModule\DataProviders\SubscriptionsUserDataProvider',

        'Crm\SubscriptionsModule\Model\Config'
            => 'Crm\SubscriptionsModule\Models\Config',

        'Crm\SubscriptionsModule\Populator\SubscriptionsPopulator'
            => 'Crm\SubscriptionsModule\Populators\SubscriptionsPopulator',

        'Crm\SubscriptionsModule\Tests\SubscriptionsRepositoryAddStartTimeEndTimeTest'
            => 'Crm\SubscriptionsModule\Tests\Repositories\SubscriptionsRepositoryAddStartTimeEndTimeTest',

        // ********************************************************************
        // extensions/upgrades-module
        'Crm\UpgradesModule\Components\FreeRecurrentWidget'
            => 'Crm\UpgradesModule\Components\FreeRecurrentWidget\FreeRecurrentWidget',
        'Crm\UpgradesModule\Components\PaidExtendWidget'
            => 'Crm\UpgradesModule\Components\PaidExtendWidget\PaidExtendWidget',
        'Crm\UpgradesModule\Components\PaidRecurrentWidget'
            => 'Crm\UpgradesModule\Components\PaidRecurrentWidget\PaidRecurrentWidget',
        'Crm\UpgradesModule\Components\ShortWidget'
            => 'Crm\UpgradesModule\Components\ShortWidget\ShortWidget',
        'Crm\UpgradesModule\Components\UserPaymentsListingBadge'
            => 'Crm\UpgradesModule\Components\UserPaymentsListingBadge\UserPaymentsListingBadge',

        'Crm\UpgradesModule\DataProvider\TrackerDataProviderInterface'
            => 'Crm\UpgradesModule\DataProviders\TrackerDataProviderInterface',

        'Crm\UpgradesModule\Repository\SubscriptionTypeUpgradeSchemasRepository'
            => 'Crm\UpgradesModule\Repositories\SubscriptionTypeUpgradeSchemasRepository',
        'Crm\UpgradesModule\Repository\SubscriptionUpgradesRepository'
            => 'Crm\UpgradesModule\Repositories\SubscriptionUpgradesRepository',
        'Crm\UpgradesModule\Repository\UpgradeOptionsRepository'
            => 'Crm\UpgradesModule\Repositories\UpgradeOptionsRepository',
        'Crm\UpgradesModule\Repository\UpgradeSchemasRepository'
            => 'Crm\UpgradesModule\Repositories\UpgradeSchemasRepository',

        'Crm\UpgradesModule\Upgrade\SubsequentUpgradeInterface'
            => 'Crm\UpgradesModule\Models\Upgrade\SubsequentUpgradeInterface',
        'Crm\UpgradesModule\Upgrade\UpgradeException'
            => 'Crm\UpgradesModule\Models\Upgrade\UpgradeException',
        'Crm\UpgradesModule\Upgrade\UpgradeableSubscriptionsInterface'
            => 'Crm\UpgradesModule\Models\Upgrade\UpgradeableSubscriptionsInterface',
        'Crm\UpgradesModule\Upgrade\UpgraderFactory'
            => 'Crm\UpgradesModule\Models\Upgrade\UpgraderFactory',
        'Crm\UpgradesModule\Upgrade\UpgraderInterface'
            => 'Crm\UpgradesModule\Models\Upgrade\UpgraderInterface',
        'Crm\UpgradesModule\Upgrade\UpgraderTrait'
            => 'Crm\UpgradesModule\Models\Upgrade\UpgraderTrait',
        'Crm\UpgradesModule\Upgrade\ActualUserSubscriptions'
            => 'Crm\UpgradesModule\Models\Upgrade\ActualUserSubscriptions',
        'Crm\UpgradesModule\Upgrade\FreeRecurrentUpgrade'
            => 'Crm\UpgradesModule\Models\Upgrade\FreeRecurrentUpgrade',
        'Crm\UpgradesModule\Upgrade\NoDefaultSubscriptionTypeException'
            => 'Crm\UpgradesModule\Models\Upgrade\NoDefaultSubscriptionTypeException',
        'Crm\UpgradesModule\Upgrade\PaidExtendUpgrade'
            => 'Crm\UpgradesModule\Models\Upgrade\PaidExtendUpgrade',
        'Crm\UpgradesModule\Upgrade\PaidRecurrentUpgrade'
            => 'Crm\UpgradesModule\Models\Upgrade\PaidRecurrentUpgrade',
        'Crm\UpgradesModule\Upgrade\ShortUpgrade'
            => 'Crm\UpgradesModule\Models\Upgrade\ShortUpgrade',
        'Crm\UpgradesModule\Upgrade\ShortenSubscriptionTrait'
            => 'Crm\UpgradesModule\Models\Upgrade\ShortenSubscriptionTrait',
        'Crm\UpgradesModule\Upgrade\SpecificUserSubscriptions'
            => 'Crm\UpgradesModule\Models\Upgrade\SpecificUserSubscriptions',
        'Crm\UpgradesModule\Upgrade\SplitSubscriptionTrait'
            => 'Crm\UpgradesModule\Models\Upgrade\SplitSubscriptionTrait',
        'Crm\UpgradesModule\Upgrade\AvailableUpgraders'
            => 'Crm\UpgradesModule\Models\Upgrade\AvailableUpgraders',

        // ********************************************************************
        // extensions/users-module
        'Crm\UsersModule\Components\ActiveRegisteredUsersStatWidget'
            => 'Crm\UsersModule\Components\ActiveRegisteredUsersStatWidget\ActiveRegisteredUsersStatWidget',
        'Crm\UsersModule\Components\AddressWidget'
            => 'Crm\UsersModule\Components\AddressWidget\AddressWidget',
        'Crm\UsersModule\Components\AutologinTokens'
            => 'Crm\UsersModule\Components\AutologinTokens\AutologinTokens',
        'Crm\UsersModule\Components\MonthToDateUsersStatWidget'
            => 'Crm\UsersModule\Components\MonthToDateUsersStatWidget\MonthToDateUsersStatWidget',
        'Crm\UsersModule\Components\MonthUsersSmallBarGraphWidget'
            => 'Crm\UsersModule\Components\MonthUsersSmallBarGraphWidget\MonthUsersSmallBarGraphWidget',
        'Crm\UsersModule\Components\MonthUsersStatWidget'
            => 'Crm\UsersModule\Components\MonthUsersStatWidget\MonthUsersStatWidget',
        'Crm\UsersModule\Components\SsoWidget'
            => 'Crm\UsersModule\Components\SsoWidget\SsoWidget',
        'Crm\UsersModule\Components\TodayUsersStatWidget'
            => 'Crm\UsersModule\Components\TodayUsersStatWidget\TodayUsersStatWidget',
        'Crm\UsersModule\Components\UserActionLogAdminFactoryInterface'
            => 'Crm\UsersModule\Components\UserActionLogAdmin\UserActionLogAdminFactoryInterface',
        'Crm\UsersModule\Components\UserActionLogAdmin'
            => 'Crm\UsersModule\Components\UserActionLogAdmin\UserActionLogAdmin',
        'Crm\UsersModule\Components\UserConnectedAccountsListWidget'
            => 'Crm\UsersModule\Components\UserConnectedAccountsListWidget\UserConnectedAccountsListWidget',
        'Crm\UsersModule\Components\UserLoginAttempts'
            => 'Crm\UsersModule\Components\UserLoginAttempts\UserLoginAttempts',
        'Crm\UsersModule\Components\UserMeta'
            => 'Crm\UsersModule\Components\UserMeta\UserMeta',
        'Crm\UsersModule\Components\UserPasswordChanges'
            => 'Crm\UsersModule\Components\UserPasswordChanges\UserPasswordChanges',
        'Crm\UsersModule\Components\UserSourceAccesses'
            => 'Crm\UsersModule\Components\UserSourceAccesses\UserSourceAccesses',
        'Crm\UsersModule\Components\UserTokens'
            => 'Crm\UsersModule\Components\UserTokens\UserTokens',

        'Crm\UsersModule\Components\Widgets\DetailWidget'
            => 'Crm\UsersModule\Components\Widgets\DetailWidget\DetailWidget',
        'Crm\UsersModule\Components\Widgets\DetailWidgetFactoryInterface'
            => 'Crm\UsersModule\Components\Widgets\DetailWidget\DetailWidgetFactoryInterface',

        'Crm\UsersModule\DataProvider\RegisterFormDataProviderInterface'
            => 'Crm\UsersModule\DataProviders\RegisterFormDataProviderInterface',
        'Crm\UsersModule\DataProvider\UserFormDataProviderInterface'
            => 'Crm\UsersModule\DataProviders\UserFormDataProviderInterface',
        'Crm\UsersModule\DataProvider\UsersClaimUserDataProvider'
            => 'Crm\UsersModule\DataProviders\UsersClaimUserDataProvider',
        'Crm\UsersModule\DataProvider\AccessTokenDataProviderInterface'
            => 'Crm\UsersModule\DataProviders\AccessTokenDataProviderInterface',
        'Crm\UsersModule\DataProvider\AddressFormDataProviderInterface'
            => 'Crm\UsersModule\DataProviders\AddressFormDataProviderInterface',
        'Crm\UsersModule\DataProvider\CanDeleteAddressDataProviderInterface'
            => 'Crm\UsersModule\DataProviders\CanDeleteAddressDataProviderInterface',
        'Crm\UsersModule\User\ClaimUserDataProviderInterface'
            => 'Crm\UsersModule\DataProviders\ClaimUserDataProviderInterface',
        'Crm\UsersModule\DataProvider\FilterAbusiveUserFormDataProviderInterface'
            => 'Crm\UsersModule\DataProviders\FilterAbusiveUserFormDataProviderInterface',
        'Crm\UsersModule\DataProvider\FilterUserActionLogsDataProviderInterface'
            => 'Crm\UsersModule\DataProviders\FilterUserActionLogsDataProviderInterface',
        'Crm\UsersModule\DataProvider\FilterUserActionLogsFormDataProviderInterface'
            => 'Crm\UsersModule\DataProviders\FilterUserActionLogsFormDataProviderInterface',
        'Crm\UsersModule\DataProvider\FilterUsersFormDataProviderInterface'
            => 'Crm\UsersModule\DataProviders\FilterUsersFormDataProviderInterface',
        'Crm\UsersModule\DataProvider\FilterUsersSelectionDataProviderInterface'
            => 'Crm\UsersModule\DataProviders\FilterUsersSelectionDataProviderInterface',
        'Crm\UsersModule\DataProvider\GoogleSignInDataProviderInterface'
            => 'Crm\UsersModule\DataProviders\GoogleSignInDataProviderInterface',
        'Crm\UsersModule\DataProvider\GoogleTokenSignInDataProviderInterface'
            => 'Crm\UsersModule\DataProviders\GoogleTokenSignInDataProviderInterface',
        'Crm\UsersModule\DataProvider\UniversalSearchDataProvider'
            => 'Crm\UsersModule\DataProviders\UniversalSearchDataProvider',

        'Crm\UsersModule\User\AddressesUserDataProvider'
            => 'Crm\UsersModule\DataProviders\AddressesUserDataProvider',
        'Crm\UsersModule\User\AdminUserGroupsUserDataProvider'
            => 'Crm\UsersModule\DataProviders\AdminUserGroupsUserDataProvider',
        'Crm\UsersModule\User\AutoLoginTokensUserDataProvider'
            => 'Crm\UsersModule\DataProviders\AutoLoginTokensUserDataProvider',
        'Crm\UsersModule\User\BasicUserDataProvider'
            => 'Crm\UsersModule\DataProviders\BasicUserDataProvider',
        'Crm\UsersModule\User\LoginAttemptsUserDataProvider'
            => 'Crm\UsersModule\DataProviders\LoginAttemptsUserDataProvider',
        'Crm\UsersModule\User\UserConnectedAccountsDataProvider'
            => 'Crm\UsersModule\DataProviders\UserConnectedAccountsDataProvider',
        'Crm\UsersModule\User\UserMetaUserDataProvider'
            => 'Crm\UsersModule\DataProviders\UserMetaUserDataProvider',

        'Crm\UsersModule\Auth\Access\AccessToken'
            => 'Crm\UsersModule\Models\Auth\Access\AccessToken',
        'Crm\UsersModule\Auth\Access\AccessTokenNotFoundException'
            => 'Crm\UsersModule\Models\Auth\Access\AccessTokenNotFoundException',
        'Crm\UsersModule\Auth\Access\TokenGenerator'
            => 'Crm\UsersModule\Models\Auth\Access\TokenGenerator',

        'Crm\UsersModule\Auth\AutoLogin\AutoLogin'
            => 'Crm\UsersModule\Models\Auth\AutoLogin\AutoLogin',

        'Crm\UsersModule\Auth\Rate\IpRateLimit'
            => 'Crm\UsersModule\Models\Auth\Rate\IpRateLimit',
        'Crm\UsersModule\Auth\Rate\RateLimitException'
            => 'Crm\UsersModule\Models\Auth\Rate\RateLimitException',
        'Crm\UsersModule\Auth\Rate\RegistrationIpRateLimit'
            => 'Crm\UsersModule\Models\Auth\Rate\RegistrationIpRateLimit',
        'Crm\UsersModule\Auth\Rate\WrongPasswordRateLimit'
            => 'Crm\UsersModule\Models\Auth\Rate\WrongPasswordRateLimit',

        'Crm\UsersModule\Auth\AutoLogin\Repository\AutoLoginTokensRepository'
            => 'Crm\UsersModule\Repositories\AutoLoginTokensRepository',
        'Crm\UsersModule\Auth\Repository\AdminAccessRepository'
            => 'Crm\UsersModule\Repositories\AdminAccessRepository',
        'Crm\UsersModule\Auth\Repository\AdminGroupsAccessRepository'
            => 'Crm\UsersModule\Repositories\AdminGroupsAccessRepository',
        'Crm\UsersModule\Auth\Repository\AdminGroupsRepository'
            => 'Crm\UsersModule\Repositories\AdminGroupsRepository',
        'Crm\UsersModule\Auth\Repository\AdminUserGroupsRepository'
            => 'Crm\UsersModule\Repositories\AdminUserGroupsRepository',

        'Crm\UsersModule\Auth\Sso\AlreadyLinkedAccountSsoException'
            => 'Crm\UsersModule\Models\Auth\Sso\AlreadyLinkedAccountSsoException',
        'Crm\UsersModule\Auth\Sso\AppleSignIn'
            => 'Crm\UsersModule\Models\Auth\Sso\AppleSignIn',
        'Crm\UsersModule\Auth\Sso\GoogleSignIn'
            => 'Crm\UsersModule\Models\Auth\Sso\GoogleSignIn',
        'Crm\UsersModule\Auth\Sso\SsoException'
            => 'Crm\UsersModule\Models\Auth\Sso\SsoException',
        'Crm\UsersModule\Auth\Sso\SsoUserManager'
            => 'Crm\UsersModule\Models\Auth\Sso\SsoUserManager',

        'Crm\UsersModule\Auth\Authorizator'
            => 'Crm\UsersModule\Models\Auth\Authorizator',
        'Crm\UsersModule\Auth\InvalidEmailException'
            => 'Crm\UsersModule\Models\Auth\InvalidEmailException',
        'Crm\UsersModule\Auth\PasswordGenerator'
            => 'Crm\UsersModule\Models\Auth\PasswordGenerator',
        'Crm\UsersModule\Auth\Permissions'
            => 'Crm\UsersModule\Models\Auth\Permissions',
        'Crm\UsersModule\Auth\UserAuthenticator'
            => 'Crm\UsersModule\Models\Auth\UserAuthenticator',
        'Crm\UsersModule\Auth\SignInRedirectValidator'
            => 'Crm\UsersModule\Models\Auth\SignInRedirectValidator',
        'Crm\UsersModule\Auth\UserManager'
            => 'Crm\UsersModule\Models\Auth\UserManager',
        'Crm\UsersModule\Auth\AccessTokensApiAuthorizationInterface'
            => 'Crm\UsersModule\Models\Auth\AccessTokensApiAuthorizationInterface',

        'Crm\UsersModule\Auth\DefaultUserTokenAuthorization'
            => 'Crm\UsersModule\Models\Auth\DefaultUserTokenAuthorization',
        'Crm\UsersModule\Auth\DeviceTokenAuthorization'
            => 'Crm\UsersModule\Models\Auth\DeviceTokenAuthorization',
        'Crm\UsersModule\Auth\ServiceTokenAuthorization'
            => 'Crm\UsersModule\Models\Auth\ServiceTokenAuthorization',
        'Crm\UsersModule\Auth\UserTokenAuthorization'
            => 'Crm\UsersModule\Models\Auth\UserTokenAuthorization',
        'Crm\UsersModule\Auth\UsersApiAuthorizationInterface'
            => 'Crm\UsersModule\Models\Auth\UsersApiAuthorizationInterface',

        'Crm\UsersModule\Builder\UserBuilder'
            => 'Crm\UsersModule\Models\Builder\UserBuilder',

        'Crm\UsersModule\Email\EmailValidator'
            => 'Crm\UsersModule\Models\Email\EmailValidator',
        'Crm\UsersModule\Email\RegexpValidator'
            => 'Crm\UsersModule\Models\Email\RegexpValidator',
        'Crm\UsersModule\Email\StaticDomainFileValidator'
            => 'Crm\UsersModule\Models\Email\StaticDomainFileValidator',
        'Crm\UsersModule\Email\ValidatorInterface'
            => 'Crm\UsersModule\Models\Email\ValidatorInterface',

        'Crm\UsersModule\Locale\UserDataLocaleResolver'
            => 'Crm\UsersModule\Models\Locale\UserDataLocaleResolver',

        'Crm\UsersModule\Repository\AccessTokensRepository'
            => 'Crm\UsersModule\Repositories\AccessTokensRepository',
        'Crm\UsersModule\Repository\UserMetaRepository'
            => 'Crm\UsersModule\Repositories\UserMetaRepository',
        'Crm\UsersModule\Repository\UserStatsRepository'
            => 'Crm\UsersModule\Repositories\UserStatsRepository',
        'Crm\UsersModule\Repository\AddressChangeRequestsRepository'
            => 'Crm\UsersModule\Repositories\AddressChangeRequestsRepository',
        'Crm\UsersModule\Repository\AddressTypesRepository'
            => 'Crm\UsersModule\Repositories\AddressTypesRepository',
        'Crm\UsersModule\Repository\AddressesMetaRepository'
            => 'Crm\UsersModule\Repositories\AddressesMetaRepository',
        'Crm\UsersModule\Repository\AddressesRepository'
            => 'Crm\UsersModule\Repositories\AddressesRepository',
        'Crm\UsersModule\Repository\CantDeleteAddressException'
            => 'Crm\UsersModule\Repositories\CantDeleteAddressException',
        'Crm\UsersModule\Repository\ChangePasswordsLogsRepository'
            => 'Crm\UsersModule\Repositories\ChangePasswordsLogsRepository',
        'Crm\UsersModule\Repository\CountriesRepository'
            => 'Crm\UsersModule\Repositories\CountriesRepository',
        'Crm\UsersModule\Repository\GroupsRepository'
            => 'Crm\UsersModule\Repositories\GroupsRepository',
        'Crm\UsersModule\Repository\PasswordResetTokensRepository'
            => 'Crm\UsersModule\Repositories\PasswordResetTokensRepository',
        'Crm\UsersModule\Repository\ShortPasswordException'
            => 'Crm\UsersModule\Repositories\ShortPasswordException',
        'Crm\UsersModule\Repository\UserActionsLogRepository'
            => 'Crm\UsersModule\Repositories\UserActionsLogRepository',
        'Crm\UsersModule\Repository\UserAlreadyExistsException'
            => 'Crm\UsersModule\Repositories\UserAlreadyExistsException',
        'Crm\UsersModule\Repository\UserEmailConfirmationsRepository'
            => 'Crm\UsersModule\Repositories\UserEmailConfirmationsRepository',
        'Crm\UsersModule\Repository\UserGroupsRepository'
            => 'Crm\UsersModule\Repositories\UserGroupsRepository',
        'Crm\UsersModule\Repository\RegistrationAttemptsRepository'
            => 'Crm\UsersModule\Repositories\RegistrationAttemptsRepository',
        'Crm\UsersModule\Repository\LoginAttemptsRepository'
            => 'Crm\UsersModule\Repositories\LoginAttemptsRepository',
        'Crm\UsersModule\Repository\UserConnectedAccountsRepository'
            => 'Crm\UsersModule\Repositories\UserConnectedAccountsRepository',
        'Crm\UsersModule\Repository\UsersRepository'
            => 'Crm\UsersModule\Repositories\UsersRepository',

        'Crm\UsersModule\User\ClaimedUserException'
            => 'Crm\UsersModule\Models\User\ClaimedUserException',
        'Crm\UsersModule\User\IUserGetter'
            => 'Crm\UsersModule\Models\User\IUserGetter',

        'Crm\UsersModule\User\ReachChecker'
            => 'Crm\UsersModule\Models\User\ReachChecker',
        'Crm\UsersModule\User\UnclaimedUserException'
            => 'Crm\UsersModule\Models\User\UnclaimedUserException',
        'Crm\UsersModule\User\UserData'
            => 'Crm\UsersModule\Models\User\UserData',
        'Crm\UsersModule\User\ZipBuilder'
            => 'Crm\UsersModule\Models\User\ZipBuilder',
        'Crm\UsersModule\User\UnclaimedUser'
            => 'Crm\UsersModule\Models\User\UnclaimedUser',

        'Crm\UsersModule\AdminFilterFormData'
            => 'Crm\UsersModule\Models\AdminFilterFormData',

        'Crm\UsersModule\Populator\AutologinPopulator'
            => 'Crm\UsersModule\Populators\AutologinPopulator',
        'Crm\UsersModule\Populator\GroupsPopulator'
            => 'Crm\UsersModule\Populators\GroupsPopulator',
        'Crm\UsersModule\Populator\UsersPopulator'
            => 'Crm\UsersModule\Populators\UsersPopulator',

        'Crm\UsersModule\Repository\Tests\CountriesRepositoryTest'
            => 'Crm\UsersModule\Tests\Repositories\CountriesRepositoryTest',

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
