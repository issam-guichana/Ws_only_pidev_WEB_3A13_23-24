<?php

namespace App\Form;

use App\Entity\User;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType as TypeTextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Choice;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('username', TypeTextType::class, [
            'label' => 'Username',
            'required' => true,

            'constraints' => [
                new NotBlank(),
                new Length(['min' => 3, 'max' => 255]),
            ],
        ])
            
            ->add('email', TypeTextType::class, [
                'label' => 'email',
                'required' => true,

                'constraints' => [
                    new NotBlank(),
                    new Email(),
                ],
            ])
            
            // ->add('mdp', PasswordType::class, [
            //     'label' => 'mdp',
            //     'required' => true,

            //     'constraints' => [
            //         new NotBlank(),
            //         new Length(['min' => 6]),
            //     ],
            // ])
                ->add('mdp', RepeatedType::class, [
                'type' => PasswordType::class,
                'first_options' => ['label' => 'Password'],
                'second_options' => ['label' => 'Confirm Password'],
                'invalid_message' => 'The password fields must match.',
            ])
            
            ->add('mdp',RepeatedType::class, [
                'type'=>PasswordType::class,
                'first_options'=>['label'=>'Password'],
                'second_options'=>['label'=>'Confirm Password']
            ])

            ->add('age', null, [
                'constraints' => [
                    new NotBlank(),
                    new Choice(['choices' => range(1, 120)]), // Assuming age must be between 1 and 120
                ],
            ])
            
            ->add('role', ChoiceType::class, [
                'choices' => [
                    'ADMIN' => 'ADMIN',
                    'FORMATEUR' => 'FORMATEUR',
                    'CLIENT' => 'CLIENT',
                ],
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new NotBlank(),
                ],
            ])

            ->add('gender', ChoiceType::class, [
                'choices' => [
                    'Homme' => 'Homme',
                    'Femme' => 'Femme',
                ],
                
                'constraints' => [
                    new NotBlank(),
                ],
            ])

            ->add('image', FileType::class, [
                'label' => 'Profile Picture',
                'required' => false,
                'mapped' => false,
            ])

           // ->add('status')
            
             ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
    
}
