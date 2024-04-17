<?php

namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RoomF extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom_room', TextType::class, [
                'label' => 'Nom Room',
            ])
            ->add('combobox', ChoiceType::class, [
                'label' => 'Combobox',
                'choices' => [
                    'Option 1' => 'option1',
                    'Option 2' => 'option2',
                    'Option 3' => 'option3',
                ],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here if needed
        ]);
    }
}
