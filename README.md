# CRM - Rector rules

This repository contains [Rector](https://github.com/rectorphp/rector) rules for upgrade of custom modules used with [REMP CRM](https://github.com/remp2020/crm-skeleton/).

## Install package

```shell
composer require --dev remp/crm-rector
```

_Note: Composer will ask if you trust plugin `rector/extension-installer`. This plugin installs CRM rules into Rector package._

## Upgrade CRM v0.38 -> CRM v1.0

- Set: `Crm\Utils\Rector\Set\CrmSetList::CRM_1_0` contains CRM API Handler interface changes and Nette rules (3.0, 3.1).
- Set: `Crm\Utils\Rector\Set\CrmSetList::CRM_1_0_WITHOUT_NETTE` contains only CRM API Handler interface changes.
  - You can call Nette sets from your `rector.php` later.

1. Create `rector.php`:

```php
<?php

declare(strict_types=1);

use Crm\Utils\Rector\Set\CrmSetList;
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

    // set with CRM 1.0 changes
    $containerConfigurator->import(CrmSetList::CRM_1_0);

    // set with same CRM 1.0 changes but without Nette 3
    // $containerConfigurator->import(CrmSetList::CRM_1_0_WITHOUT_NETTE);
    // Nette 3 sets
    // $containerConfigurator->import(\Rector\Nette\Set\NetteSetList::NETTE_30);
    // $containerConfigurator->import(\Rector\Nette\Set\NetteSetList::NETTE_31);
};
```

2. Run Rector:

```shell
vendor/bin/rector process --dry-run
```

3. Run Rector without `--dry-run` after you reviewed planned changes.
4. Follow rest of the [CRM 1.0 migration guide](https://github.com/remp2020/crm-application-module/blob/master/MIGRATION.md).
