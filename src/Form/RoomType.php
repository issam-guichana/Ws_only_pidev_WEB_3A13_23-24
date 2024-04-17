<?php

namespace App\Form;

use App\Entity\Room;
use App\Entity\Formation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;



class RoomType extends AbstractType
{   private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {   $choices = $this->getChoicesFromDatabase();
        $builder
            ->add('nomRoom')
            ->add('description')
           // ->add('Nom_formation', ChoiceType::class, [
             //   'choices' => $choices,
            //])
            //->add('status')
           // ->add('nom_formation', EntityType::class, [
             //   'class' => Formation::class, // Replace with the actual entity class
             
              //  'choices' => $options['nom_formations'],  // Replace with the actual property name for nom_formation
               // 'placeholder' => 'Select a nom_formation', // Optional placeholder text
                // Add other options as needed
            //])
            ->add('dateCRoom')
           
           // ->add('suspendTime')
            ->add('save',SubmitType::class)
        ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'room_choices' => [], // Define the default value for the room_choices option
            // Other default options for your form type
        ]);
    }
    private function getChoicesFromDatabase(): array
    {
        // Fetch data from the database (replace with your own query)
        $repository = $this->entityManager->getRepository(Formation::class);
        $entities = $repository->findAll();

        // Format the data into choices array
        $choices = [];
        foreach ($entities as $entity) {
            // Assuming $entity has 'id' and 'name' properties
            $choices[$entity->getNomForm()] = $entity->getIdForm();
        }

        return $choices;
    }
}
