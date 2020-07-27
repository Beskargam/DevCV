<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $passwordEncorder;

    public function __construct(UserPasswordEncoderInterface $passwordEncorder)
    {
        $this->passwordEncorder = $passwordEncorder;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername('SpaceCitizen');
        $user->setPassword($this->passwordEncorder->encodePassword($user, 'STAR-HZ7B-2GV6'));

        $manager->persist($user);

        $manager->flush();
    }
}
