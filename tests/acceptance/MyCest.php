<?php
use \AcceptanceTester;

class MyCest
{
    public function _before()
    {
    }

    public function _after()
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $i)
    {
        $i->execute();
    }
}