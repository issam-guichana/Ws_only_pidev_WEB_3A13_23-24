<?php

namespace App\Form;

use App\Entity\Question;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class QuestionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('question', TextType::class)
            ->add('option1', TextType::class)
            ->add('option2', TextType::class)
            ->add('option3', TextType::class)
            ->add('option4', TextType::class)
            ->add('reponse', ChoiceType::class, [
                'choices'  => [
                    'Option 1' => 'option1',
                    'Option 2' => 'option2',
                    'Option 3' => 'option3',
                    'Option 4' => 'option4',
                ],
                'expanded' => false,  // Set to true for radio buttons
                'multiple' => false,  // Ensure that only one response can be selected
                'label'    => 'Selectionner la bonne reponse'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Question::class,
            // Remove 'exclude_quizId' if it's not being used
        ]);
    }
}
