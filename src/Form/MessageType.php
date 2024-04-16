<?php

namespace App\Form;

use App\Entity\Message;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class MessageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('contenu')
           // ->add('image')
          //  ->add('heureMsg')
            //->add('dateMsg')
           // ->add('senderMsg')
            //->add('status')
           // ->add('room')
           ->add('room', ChoiceType::class, [
            'choices' => $options['room_choices'],
            'choice_loader' => new CallbackChoiceLoader(function () use ($options) {
                return ChoiceList::fromArray($options['room_choices'], function ($choice) {
                    return $choice;
                });
            }),
        ])
            ->add('save',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Message::class,
        ]);
    }
}
