<?php

namespace App\Form;

use App\Entity\Formation;
use Symfony\Component\Form\AbstractType;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Type;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
class FormationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomForm', TextType::class, [
                'label' => 'Nom de la formation:',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Le nom de la formation ne peut pas être vide.',
                    ]),
                    new Type([
                        'type' => 'alpha',
                        'message' => 'Le nom de la formation ne peut contenir que des lettres.',
                    ]),
                ],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description de la formation:',
                'constraints' => [
                    new NotBlank([
                        'message' => 'La description de la formation ne peut pas être vide.',
                    ]),
                ],
            ])
            ->add('cat', null, [
                'label' => 'Catégorie de la formation:',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez sélectionner une catégorie pour la formation.',
                    ]),
                ],
            ]);
    }
}
