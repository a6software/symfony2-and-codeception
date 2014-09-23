<?php


class DbServiceTest extends \Codeception\TestCase\Test
{
   /**
    * @var \UnitTester
    */
    protected $tester;

    /**
     * @var Doctrine\ORM\EntityRepository
     */
    private $repository;

    protected function _before()
    {
        $this->repository = $this->tester->grabServiceFromContainer('a6_user.repository.profile_repository');
    }

    protected function _after()
    {
    }

    public function testOne()
    {
        $this->tester->seeInRepository('A6UserBundle:Profile', array('lastName'=>'Blueshoes'));

        $this->repository->remove(2);

        $this->tester->dontSeeInRepository('A6UserBundle:Profile', array('lastName'=>'Blueshoes'));
    }

    public function testTwo()
    {
        $this->tester->seeInRepository('A6UserBundle:Profile', array('lastName'=>'Blueshoes'));

        $this->repository->remove(2);

        $this->tester->dontSeeInRepository('A6UserBundle:Profile', array('lastName'=>'Blueshoes'));
    }
}