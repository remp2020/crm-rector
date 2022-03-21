# CRM - Rector rules

This repository contains [Rector](https://github.com/rectorphp/rector) rules for upgrade of custom modules used with [REMP CRM](https://github.com/remp2020/crm-skeleton/).

## How to use

### 1. Install package

```shell
composer require --dev remp/crm-rector
```

_Note: Composer will ask if you trust plugin `rector/extension-installer`. This plugin installs CRM rules into Rector package._

### 2. Create `rector.php`:

Run command:

```shell
vendor/bin/rector init
```

### 3. Update `rector.php`

Fill custom paths & options & sets/rules you want to run.

E.g. to update to CRM 1.0 it could look like this:

```php
<?php

declare(strict_types=1);

use Rector\Core\Configuration\Option;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $parameters = $containerConfigurator->parameters();

    // paths to refactor
    $parameters->set(Option::PATHS, [
        __DIR__ . '/app/custom-modules', // path to custom modules
         __DIR__ . '/composer.json', // root composer -> updates REMP CRM packages automatically
    ]);

    // optional settings to automatically import namespaces in changed files
    $parameters->set(Option::AUTO_IMPORT_NAMES, true);
    $parameters->set(Option::IMPORT_SHORT_CLASSES, false);
    $parameters->set(Option::APPLY_AUTO_IMPORT_NAMES_ON_CHANGED_FILES_ONLY, true);

    // set with CRM 1.0 changes; check README for list of sets
    $containerConfigurator->import(\Crm\Utils\Rector\Set\CrmSetList::CRM_1_0);

    // set service if you want to run individual rule; check README for list of rules
    // $services = $containerConfigurator->services();
    // $services->set(\Crm\Utils\Rector\UpgradeToCrm1\ApiHandlerJsonResponseRector::class);
};
```

Sets and rules are listed below.

### 4. Run Rector:

```shell
vendor/bin/rector process --dry-run
```

After you reviewed planned changes, run it without `--dry-run`:

```shell
vendor/bin/rector process
```

_Use `vendor/bin/rector --help` for help. Notable flags are `-vvv` for verbose messages, `--clear-cache` and `--xdebug` if you need to debug rector rules._

## Sets & rules

### Upgrade CRM v0.38 -> CRM v1.0

Check also the [CRM 1.0 migration guide](https://github.com/remp2020/crm-application-module/blob/master/MIGRATION.md).

#### Sets

- Set: `Crm\Utils\Rector\Set\CrmSetList::CRM_1_0` contains CRM changes and Nette rules (3.0, 3.1).
- Set: `Crm\Utils\Rector\Set\CrmSetList::CRM_1_0_WITHOUT_NETTE` contains only CRM changes.
  - You can call Nette sets from your `rector.php` later.

#### Individual rules

- [`\Crm\Utils\Rector\UpgradeToCrm1\ApiHandlerParametersRector`](src/UpgradeToCrm1/ApiHandlerParametersRector.php)
  - Changes parameters of Api handlers which implement interface `Crm\ApiModule\Api\ApiHandlerInterface` to CRM v1.0.
- [`\Crm\Utils\Rector\UpgradeToCrm1\ApiHandlerJsonResponseRector`](src/UpgradeToCrm1/ApiHandlerJsonResponseRector.php)
  - Changes all instances of `Crm\ApiModule\Api\JsonResponse` to `Tomaj\NetteApi\Response\JsonApiResponse`.

_Note: Both these rules are part of sets `CRM_1_0` and `CRM_1_0_WITHOUT_NETTE`. These are created as individual rules because Rector's general rules were not sufficient. We recommend running whole set._
