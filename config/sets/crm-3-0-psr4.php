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
