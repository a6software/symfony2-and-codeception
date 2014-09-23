<?php

namespace A6\CodeceptIsAwesomeBundle\DataFixtures\ORM;

use A6\UserBundle\Entity\Profile;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadProfileData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        foreach ($this->getData() as $data) {

            $profile = new Profile($this->getReference('user-' . $data[0]));
            $profile
                ->setFirstName($data[1])
                ->setMiddleName($data[2])
                ->setLastName($data[3])
                ->setJobTitle($data[4])
                ->setSalary($data[5])
                ->setReceiveMailing($data[6])
            ;

            $manager->persist($profile);
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
        return 200;
    }

    private function getData()
    {
        return array(
            array('timmy', 'Tim', 'tee', 'Timson', 'Sales guy', 30000, true),
            array('billy', 'Bill', 'lee', 'Blueshoes', 'Programmer', 60000, true),
            array('donald', 'Donald', 'Walt', 'Duck', 'Chief Duck', 120000, false),
        );
    }

}