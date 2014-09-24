<?php

namespace A6\CodeceptIsAwesomeBundle\Service;

use Doctrine\Common\Persistence\ObjectManager;

class SalaryCalculator
{
    private $entityManager;

    public function __construct(ObjectManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function calculateTotalSalary($id)
    {
        $profileRepository = $this->entityManager->getRepository('A6UserBundle:Profile');
        $profile = $profileRepository->find($id);

        return $profile->getSalary() + $this->getBonus($profile->getSalary());
    }

    private function getBonus($salary)
    {
        return $salary * 0.1;
    }
}