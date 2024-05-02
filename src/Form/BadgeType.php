<?php

namespace App\Form;

use App\Entity\Badge;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Vich\UploaderBundle\Form\Type\VichImageType;

class BadgeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
{
    $builder
        ->add('nomBadge')
        ->add('type')
        ->add('imgBadge', FileType::class, [
            'data_class' => null,
            'label' => 'Badge Image',
            'required' => false,
            'mapped' => false,
        ]);
        
}
}
