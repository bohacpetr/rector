<?php

declare(strict_types=1);

use Rector\Renaming\Rector\MethodCall\RenameMethodRector;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->set(RenameMethodRector::class)
        ->arg('$oldToNewMethodsByClass', [
            'Twig_Node' => [
                'getLine' => 'getTemplateLine',
                'getFilename' => 'getTemplateName',
            ],
            'Twig_Template' => [
                'getSource' => 'getSourceContext',
            ],
            'Twig_Error' => [
                'getTemplateFile' => 'getTemplateName',
                'getTemplateName' => 'setTemplateName',
            ],
        ]);
};
