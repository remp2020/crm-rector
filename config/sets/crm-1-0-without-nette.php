<?php

declare (strict_types=1);

return static function (\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();

    /*
     * Change params of ApiHandlerInterface::handle() and IdempotentHandlerInterface::idempotentHandle() methods
     * - https://github.com/remp2020/crm-api-module/commit/d03536184b3dbd568c23c886032df9cd87dddb46
     */
    $services->set(\Crm\Utils\Rector\UpgradeToCrm1\ApiHandlerParametersRector::class);

    /*
     * Change JsonResponse($result) with setHttpCode($code) to new Tomaj\NetteApi\Response\JsonApiResponse($code, $result)
     */
    $services->set(\Crm\Utils\Rector\UpgradeToCrm1\ApiHandlerJsonResponseRector::class);

    /*
     * Add return types to ApiHandlerInterface::params() and ApiHandlerInterface::handle() methods
     */
    $services->set(\Rector\TypeDeclaration\Rector\ClassMethod\AddReturnTypeDeclarationRector::class)
        ->configure([
            // https://github.com/remp2020/crm-api-module/commit/93dafe1d0e2a8bcbe723d925fbbccffa37b9a0bc
            new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration(
                'Crm\\ApiModule\\Api\\ApiHandlerInterface',
                'params',
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\MixedType(), new \PHPStan\Type\MixedType())
            ),
            // https://github.com/remp2020/crm-api-module/commit/d03536184b3dbd568c23c886032df9cd87dddb46
            new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration(
                'Crm\\ApiModule\\Api\\ApiHandlerInterface',
                'handle',
                new \PHPStan\Type\ObjectType('Tomaj\\NetteApi\\Response\\ResponseInterface')
            ),
            // https://github.com/remp2020/crm-api-module/commit/8ffd4f2354c1a18b452752bf5c9b1514b3961ae4
            new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration(
                'Crm\\ApiModule\\Api\\IdempotentHandlerInterface',
                'idempotentHandle',
                new \PHPStan\Type\ObjectType('Tomaj\\NetteApi\\Response\\ResponseInterface')
            ),
        ]);

    /*
     * Move $paramsProcessor->isError() to $paramsProcessor->hasError()
     * Check Crm\ApiModule\Params\ParamsProcessor for details.
     * This was moved as quick fix of legacy code but it is deprecated. You should manually refactor it.
     *
     * https://github.com/remp2020/crm-api-module/commit/01ac6685456282eccc95ed439e00fbb13c7c5f36
     */
    $services->set(\Rector\Renaming\Rector\MethodCall\RenameMethodRector::class)
        ->configure([
            new \Rector\Renaming\ValueObject\MethodCallRename(
                'Crm\\ApiModule\\Params\\ParamsProcessor',
                'isError',
                'hasError'
            ),
        ]);

    /*
     * Update composer packages
     */
    $services->set(\Rector\Composer\Rector\ChangePackageVersionComposerRector::class)->configure([
        new \Rector\Composer\ValueObject\PackageAndVersion('remp/crm-admin-module', '1.0.0-beta2'),
        new \Rector\Composer\ValueObject\PackageAndVersion('remp/crm-api-module', '1.0.0-beta2'),
        new \Rector\Composer\ValueObject\PackageAndVersion('remp/crm-apple-appstore-module', '1.0.0-beta2'),
        new \Rector\Composer\ValueObject\PackageAndVersion('remp/crm-application-module', '1.0.0-beta2'),
        new \Rector\Composer\ValueObject\PackageAndVersion('remp/crm-clv-module', '1.0.0-beta2'),
        new \Rector\Composer\ValueObject\PackageAndVersion('remp/crm-coupon-module', '1.0.0-beta2'),
        new \Rector\Composer\ValueObject\PackageAndVersion('remp/crm-dashboard-module', '1.0.0-beta2'),
        new \Rector\Composer\ValueObject\PackageAndVersion('remp/crm-family-module', '1.0.0-beta2'),
        new \Rector\Composer\ValueObject\PackageAndVersion('remp/crm-gifts-module', '1.0.0-beta2'),
        new \Rector\Composer\ValueObject\PackageAndVersion('remp/crm-google-play-billing-module', '1.0.0-beta2'),
        new \Rector\Composer\ValueObject\PackageAndVersion('remp/crm-gopay-module', '1.0.0-beta2'),
        new \Rector\Composer\ValueObject\PackageAndVersion('remp/crm-invoices-module', '1.0.0-beta2'),
        new \Rector\Composer\ValueObject\PackageAndVersion('remp/crm-issues-module', '1.0.0-beta2'),
        new \Rector\Composer\ValueObject\PackageAndVersion('remp/crm-mobiletech-module', '1.0.0-beta2'),
        new \Rector\Composer\ValueObject\PackageAndVersion('remp/crm-onboarding-module', '1.0.0-beta2'),
        new \Rector\Composer\ValueObject\PackageAndVersion('remp/crm-payments-module', '1.0.0-beta2'),
        new \Rector\Composer\ValueObject\PackageAndVersion('remp/crm-print-module', '1.0.0-beta2'),
        new \Rector\Composer\ValueObject\PackageAndVersion('remp/crm-privatbankar-module', '1.0.0-beta2'),
        new \Rector\Composer\ValueObject\PackageAndVersion('remp/crm-products-module', '1.0.0-beta2'),
        new \Rector\Composer\ValueObject\PackageAndVersion('remp/crm-remp-campaign-module', '1.0.0-beta2'),
        new \Rector\Composer\ValueObject\PackageAndVersion('remp/crm-remp-mailer-module', '1.0.0-beta2'),
        new \Rector\Composer\ValueObject\PackageAndVersion('remp/crm-remp-pythia-module', '1.0.0-beta2'),
        new \Rector\Composer\ValueObject\PackageAndVersion('remp/crm-salesfunnel-module', '1.0.0-beta2'),
        new \Rector\Composer\ValueObject\PackageAndVersion('remp/crm-scenarios-module', '1.0.0-beta2'),
        new \Rector\Composer\ValueObject\PackageAndVersion('remp/crm-segment-module', '1.0.0-beta2'),
        new \Rector\Composer\ValueObject\PackageAndVersion('remp/crm-slsp-sporopay-module', '1.0.0-beta2'),
        new \Rector\Composer\ValueObject\PackageAndVersion('remp/crm-stripe-module', '1.0.0-beta2'),
        new \Rector\Composer\ValueObject\PackageAndVersion('remp/crm-subscriptions-module', '1.0.0-beta2'),
        new \Rector\Composer\ValueObject\PackageAndVersion('remp/crm-upgrades-module', '1.0.0-beta2'),
        new \Rector\Composer\ValueObject\PackageAndVersion('remp/crm-users-module', '1.0.0-beta2'),
        new \Rector\Composer\ValueObject\PackageAndVersion('remp/crm-vub-eplatby-module', '1.0.0-beta2'),
        new \Rector\Composer\ValueObject\PackageAndVersion('remp/crm-wordpress-module', '1.0.0-beta2'),
    ]);
};
