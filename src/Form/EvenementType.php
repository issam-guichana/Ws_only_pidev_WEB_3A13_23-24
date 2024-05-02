<?php

namespace App\Form;

use App\Entity\Evenement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Validator\Constraints\NotNull;
class EvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomEvent', Type\TextType::class, [
                'label' => 'Nom de l\'événement',
                'attr' => ['maxlength' => 255, 'class' => 'form-control'],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le nom de l\'événement ne peut pas être vide']),
                    new Assert\Regex([
                        'pattern' => '/^[a-zA-Z]+$/',
                        'message' => 'Le nom de l\'événement ne peut contenir que des lettres.',
                    ]),
                ],
            ])
            ->add('description', Type\TextareaType::class, [
                'label' => 'Description',
                'attr' => ['rows' => 5, 'class' => 'form-control'],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'La description ne peut pas être vide']),
                ],
            ])
            ->add('dateEvent', DateType::class, [
                'label' => 'Date de l\'événement',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control', 'placeholder' => 'YYYY-MM-DD'],
                'required' => false, // Allow null values
                'constraints' => [
                    
                    new NotNull(['message' => 'La date de l\'événement ne peut pas être vide']),
                    new Assert\GreaterThanOrEqual(['value' => 'today', 'message' => 'La date de l\'événement doit être dans le futur.']),
                ],
            ])
            ->add('heureDeb', Type\TimeType::class, [
                'label' => 'Heure de début',
                'widget' => 'single_text',
                'html5' => true,
                'required' => false, // Allow null values
                'constraints' => [
                    new Assert\NotBlank(['message' => 'L\'heure de début ne peut pas être vide.']),
                ],
            ])
            ->add('prix', Type\IntegerType::class, [
                'label' => 'Prix',
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le prix ne peut pas être vide']),
                    new Assert\PositiveOrZero(['message' => 'Le prix doit être un nombre positif ou zéro.']),
                ],
            ])
            ->add('nbrP', Type\IntegerType::class, [
                'label' => 'Nombre de participants',
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le nombre de participants ne peut pas être vide']),
                    new Assert\PositiveOrZero(['message' => 'Le nombre de participants doit être un nombre positif ou zéro.']),
                ],
            ])
            ->add('lieu', Type\TextType::class, [
                'label' => 'Lieu',
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le lieu ne peut pas être vide']),
                ],
            ])
            ->add('imageEvent', Type\FileType::class, [
                'label' => 'Image de l\'événement',
                'required' => false, // File field can be empty
                'mapped' => false, // This ensures the field is not bound to any property
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}