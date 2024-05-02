<?php

namespace App\Form;

use App\Entity\Quiz;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class QuizType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nomQuiz', TextType::class, [
            'required' => true,
            'attr' => ['placeholder' => 'Entrez le nom du quiz'],
            'constraints' => [
                new Assert\NotBlank([
                    'message' => 'Ce champ ne peut pas être vide.',
                ]),
            ],
            'invalid_message' => 'Veuillez remplir ce champ.',
        ])
        ->add('imageFile', FileType::class, [
            'mapped' => false,
            'required' => true, // Require image upload
            'constraints' => [
                new Assert\NotBlank([
                    'message' => 'Veuillez sélectionner une image.',
                ]),
                new Assert\Image([
                    'mimeTypes' => ['image/jpeg', 'image/png'],
                    'mimeTypesMessage' => 'Veuillez sélectionner une image au format JPEG ou PNG.',
                ])
            ],
            'invalid_message' => 'Veuillez sélectionner une image.',
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Quiz::class,
        ]);
    }
}
