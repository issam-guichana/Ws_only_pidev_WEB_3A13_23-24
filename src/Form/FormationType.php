<?php

namespace App\Form;

use App\Entity\Formation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Type;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType; // Import du type DateType
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
            ])
            ->add('dateDebut', DateType::class, [ // Ajout du champ dateDebut
                'label' => 'Date de début:',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control', 'placeholder' => 'YYYY-MM-DD'],
                'required' => false, // Allow null values
                
            ])
            ->add('dateFin', DateType::class, [ // Ajout du champ dateFin
                'label' => 'Date de fin:',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control', 'placeholder' => 'YYYY-MM-DD'],
                'required' => false, // Allow null values
                
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Formation::class,
        ]);
    }
}
