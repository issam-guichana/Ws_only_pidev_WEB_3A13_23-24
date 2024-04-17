<?php

namespace App\Security;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use App\Entity\User; // Import the User entity

class CustomUserProvider implements UserProviderInterface
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function loadUserByUsername(string $username): UserInterface
    {
        // Load user from the database based on username
        $userRepository = $this->entityManager->getRepository(User::class);
        $user = $userRepository->findOneBy(['username' => $username]);

        if (!$user) {
            throw new UsernameNotFoundException(sprintf('User "%s" not found.', $username));
        }

        return $user;
    }

    public function refreshUser(UserInterface $user)
    {
        // Implement logic to refresh a user (e.g., load user from database)
        // Note: This method is not required for stateless authentication, but it's good practice to implement it.
        throw new \Exception('Implement refreshUser() method in your custom user provider.');
    }

    public function supportsClass(string $class)
    {
        // Check if the given class is supported by this user provider
        return $class === User::class;
    }
}
