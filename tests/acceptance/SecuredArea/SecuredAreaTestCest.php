<?php
use \AcceptanceTester;

class SecuredAreaTestCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function UserCantEnterTextIntoSalaryField(AcceptanceTester $i)
    {
        $i->amOnPage('/login');
        $i->dontSee('Bad Credentials');
        $i->fillField('#username', 'timmy');
        $i->fillField('//body/div[1]/form/input[3]', 'timmy123');
        $i->click('Sign in');
        $i->see('The secured area!');
        $i->fillField('#profile_salary', 'sfasdf');
        $i->click('Save');
        $i->see('This value is not valid.');
    }

    public function UserCanSaveWithGoodValues(AcceptanceTester $i)
    {
        $i->amOnPage('/login');
        $i->dontSee('Bad Credentials');
        $i->fillField('#username', 'timmy');
        $i->fillField('//body/div[1]/form/input[3]', 'timmy123');
        $i->click('Sign in');
        $i->see('The secured area!');
        $i->fillField('#profile_jobTitle', 'Epic Swordsman');
        $i->click('Save');
        $i->see('Your changes were saved!');
    }
}