<?php
declare (strict_types=1);

use Rector\Config\RectorConfig;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->rule(\Crm\Utils\Rector\UpgradeToCrm4\InputParamChangeRector::class);
};
