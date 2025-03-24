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

use Crm\Utils\Rector\Set\CrmSetList;
use Rector\Config\RectorConfig;
use Rector\Core\Configuration\Option;

return static function (RectorConfig $rectorConfig): void {
    $parameters = $rectorConfig->parameters();

    // paths to refactor
    $rectorConfig->paths([
        __DIR__ . '/app/custom-modules', // path to custom modules
    ]);

    // set with CRM v3 and CRM v4 changes; check README for details
    $rectorConfig->sets([
        CrmSetList::CRM_4,
    ]);

    // run single rule if you don't want to run whole set
    // $rectorConfig->rule(\Crm\Utils\Rector\UpgradeToCrm4\InputParamChangeRector::class);
    // $rectorConfig->rule(\Crm\Utils\Rector\UpgradeToCrm4\RemoveParamsProcessorRector::class);

    // automatically import/remove namespaces after all rules are applied
    $rectorConfig->importNames();
    $rectorConfig->importShortClasses(false);
    $rectorConfig->removeUnusedImports();
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

### Upgrade CRM v3 to CRM v4

#### Set

Use set `CrmSetList::CRM_4`:

```php
$rectorConfig->sets([\Crm\Utils\Rector\Set\CrmSetList::CRM_4]);

// removes import of Crm\ApiModule\Models\Params\InputParam
$rectorConfig->removeUnusedImports();

// imports new *InputParam classes
$rectorConfig->importNames();

```

or individual rules.

#### Rules

##### Transform `Crm\ApiModule\Models\Params\InputParam` to specific `*InputParam` objects

This rule ([`\Crm\Utils\Rector\UpgradeToCrm4\InputParamChangeRector`](src/UpgradeToCrm4/InputParamChangeRector.php)) changes `\Crm\ApiModule\Models\Params\InputParam` to specific `InputParam` object from tomaj/nette-api library.

See what will be changed in `getRuleDefinition()` method in [`\Crm\Utils\Rector\UpgradeToCrm4\InputParamChangeRector`](src/UpgradeToCrm4/InputParamChangeRector.php)

##### Remove calls of deprecated methods from ParamsProcessor

This rule ([`\Crm\Utils\Rector\UpgradeToCrm4\RemoveParamsProcessorRector`](src/UpgradeToCrm4/RemoveParamsProcessorRector.php)) will remove useless calls of `ParamsProcessor`. Some of these methods were removed (`hasError()`). And `getErrors()` or `getValues()` (loading API parameters from `ParamsProcessor`) are not needed anymore. API runner handles errors before loading handler and provides validated parameters to `handle()` method.

> WARNING: This Rector rule does crude work. You still need to go through all changes and fix your API handlers (if you worked or need to work with errors).
>
> If you use `ApiParamsValidatorInterface`, do not run this Rector rule. It doesn't understand this context.

See what will be changed in `getRuleDefinition()` method in [`\Crm\Utils\Rector\UpgradeToCrm4\RemoveParamsProcessorRector`](src/UpgradeToCrm4/RemoveParamsProcessorRector.php)

---

### Transform Nette annotations to attributes

Set:

```php
$rectorConfig->sets([\Crm\Utils\Rector\Set\CrmSetList::NETTE_ANNOTATIONS_TO_ATTRIBUTES]);
```

Changes:

```php
    /** @var @inject */
    public Crm\UsersModule\Repositories\UsersRepository $usersRepository;
```

to:

```php
    #[\Nette\DI\Attributes\Inject]
    public Crm\UsersModule\Repositories\UsersRepository $usersRepository;
```

Fixes also `persistent` and `crossOrigin`.

### Transform to lazy event listeners

#### Individual rules

- [`\Crm\Utils\Rector\TransformToLazyEventListeners\TransformToLazyEventListeners`](src/TransformToLazyEventListeners/TransformToLazyEventListeners.php)
  - Changes register events method to new lazy variant and removes `$this->getInstance()` call from all event registrations.

### Upgrade CRM v2.* -> CRM v3.0

- Set: `Crm\Utils\Rector\Set\CrmSetList::CRM_3_0_PSR4` - contains namespace renames after class names / namespaces were changed to follow PSR4 standard.

  Usage:

  ```php
  $rectorConfig->sets([
      CrmSetList::CRM_3_0_PSR4,
  ]);
  ```

---

### \[ARCHIVED\] Upgrade CRM v0.38 -> CRM v1.0

> ℹ️ We are not maintaining this set anymore. Set & rules were removed. Last release with working rules is https://github.com/remp2020/crm-rector/releases/tag/1.2.0.

Check also the [CRM 1.0 migration guide](https://github.com/remp2020/crm-application-module/blob/master/MIGRATION.md).

#### Sets

- Set: `Crm\Utils\Rector\Set\CrmSetList::CRM_1_0` contains CRM changes and Nette rules (3.0, 3.1).
- Set: `Crm\Utils\Rector\Set\CrmSetList::CRM_1_0_WITHOUT_NETTE` contains only CRM changes.
  - You can call Nette sets from your `rector.php` later.
- Set: `Crm\Utils\Rector\Set\CrmSetList::NETTE_ANNOTATIONS_TO_ATTRIBUTES` contains transformation of PHPdoc-based annotations to PHP 8.0 attributes (available since Nette 3.0+).

#### Individual rules

- [`\Crm\Utils\Rector\UpgradeToCrm1\ApiHandlerParametersRector`](src/UpgradeToCrm1/ApiHandlerParametersRector.php)
  - Changes parameters of Api handlers which implement interface `Crm\ApiModule\Api\ApiHandlerInterface` to CRM v1.0.
- [`\Crm\Utils\Rector\UpgradeToCrm1\ApiHandlerJsonResponseRector`](src/UpgradeToCrm1/ApiHandlerJsonResponseRector.php)
  - Changes all instances of `Crm\ApiModule\Api\JsonResponse` to `Tomaj\NetteApi\Response\JsonApiResponse`.

_Note: Both these rules are part of sets `CRM_1_0` and `CRM_1_0_WITHOUT_NETTE`. These are created as individual rules because Rector's general rules were not sufficient. We recommend running whole set._
