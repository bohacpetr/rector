<?php

namespace Rector\Symfony\Tests\Rector\Form\StringFormTypeToClassRector\Fixture;

use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilder;

final class SkipAlreadyAddedType
{
    public function buildForm(FormBuilder $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => 'sylius.ui.email',
            ])
        ;
    }
}
