<?php

namespace A6\CodeceptIsAwesomeBundle\DataFixtures\ORM;

use A6\UserBundle\Entity\Profile;
use A6\UserBundle\Entity\User;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        foreach ($this->getData() as $data) {

            $user = new User();
            $user->setUsername($data[0])
                ->setEmail($data[1])
                ->setPlainPassword($data[2])
            ;

            $manager->persist($user);

            $this->addReference(
                sprintf('user-%s', $data[0]),
                $user
            );
        }

        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 100;
    }

    private function getData()
    {
        return array(
            array('timmy', 'timmy@timson.net', 'timmy123'),
            array('billy', 'billy@bluehat.org', 'billy456'),
            array('donald', 'donald@duck.co.uk', 'donald789'),
        );
    }

}