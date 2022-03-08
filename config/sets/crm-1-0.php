<?php

declare (strict_types=1);

return static function (\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();

    /*
     * REMP CRM related changes
     */
    $containerConfigurator->import(\Crm\Utils\Rector\Set\CrmSetList::CRM_1_0_WITHOUT_NETTE);

    /*
     * Nette 3 rules
     */
    $containerConfigurator->import(\Rector\Nette\Set\NetteSetList::NETTE_30);
    $containerConfigurator->import(\Rector\Nette\Set\NetteSetList::NETTE_31);
};
