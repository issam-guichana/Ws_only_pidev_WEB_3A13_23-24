<?php

namespace App\Form;

use App\Entity\Badge;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;


class BadgeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
{
    $builder
        ->add('nomBadge')
        ->add('type')
        ->add('imgBadge', FileType::class, [
            'data_class' => null,
            'label' => 'Profile Picture',
            'required' => false,
            'mapped' => true,
        ]);
        
}
}
