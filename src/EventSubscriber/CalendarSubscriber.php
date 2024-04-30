<?php

namespace App\EventSubscriber;

use App\Entity\UserFormation;
use CalendarBundle\CalendarEvents;
use CalendarBundle\Entity\Event;
use CalendarBundle\Event\CalendarEvent;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class CalendarSubscriber implements EventSubscriberInterface
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public static function getSubscribedEvents()
    {
        return [
            CalendarEvents::SET_DATA => 'onCalendarSetData',
        ];
    }

    public function onCalendarSetData(CalendarEvent $calendar)
    {
        // Fetch all formations associated with the user with ID 7
        $userFormations = $this->entityManager->getRepository(UserFormation::class)->findBy(['user' => 7]);

        // Fetch all formations associated with the user with ID 9 (formateur)
        $userFormationsFormateur = $this->entityManager->getRepository(UserFormation::class)->findBy(['user' => 9]);

        // Merge the two arrays of formations
        $allUserFormations = array_merge($userFormations, $userFormationsFormateur);
        
        // Add each user formation as an event to the calendar
        foreach ($allUserFormations as $userFormation) {
            // Assuming $userFormation->getFormation() returns the associated Formation entity
            $formation = $userFormation->getFormation();
            
            // Check if the user formation has a formation associated with it
            if ($formation) {
                $calendar->addEvent(new Event(
                    $formation->getNomForm(),
                    $formation->getDateDebut()->format('Y-m-d'),
                    $formation->getDateFin()->format('Y-m-d')
                ));
            }
        }
    }
}
