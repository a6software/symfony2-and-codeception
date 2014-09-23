<?php

namespace A6\UserBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ProfileRepository extends EntityRepository
{
    public function remove($id)
    {
        $em = $this->getEntityManager();

        $profile = $this->find($id);

        $em->remove($profile);
        $em->flush();
    }
}