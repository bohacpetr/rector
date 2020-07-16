<?php

declare(strict_types=1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->defaults()
        ->autowire()
        ->public();

    $services->load('Rector\CodeQuality\\', __DIR__ . '/../src')
        ->exclude([__DIR__ . '/../src/Rector/**/*Rector.php']);
};