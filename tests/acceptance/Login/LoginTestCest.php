<?php
use \AcceptanceTester;

class LoginTestCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function LoginIsUnsuccessfulWithBadCredentials(AcceptanceTester $i, \Codeception\Scenario $scenario)
    {
        $i->wantTo('Ensure a user is unable to log in when providing bad credentials');
        $i->amOnPage('/');
        $i->click('Let me log in please, kthx');
        $i->seeInCurrentUrl('/login');
        $i->dontSee('Bad Credentials');
        $this->doLogin($scenario, 'dsfsafs', 'safsadffd');
        $i->see('Bad Credentials');
    }

    public function LoginIsSuccessfulWithGoodCredentials(AcceptanceTester $i, \Codeception\Scenario $scenario)
    {
        $i->wantTo('Ensure a user can log in when giving valid credentials.');
        $i->amOnPage('/');
        $i->click('Let me log in please, kthx');
        $i->seeInCurrentUrl('/login');
        $i->dontSee('Bad credentials');
        $this->doLogin($scenario, 'timmy', 'timmy123');
        $i->dontSee('Bad Credentials');
        $i->seeInCurrentUrl('/secured-area');
        $i->see('The secured area!');
    }

    /**
     * @param \Codeception\Scenario $scenario
     */
    private function doLogin(\Codeception\Scenario $scenario, $username, $password)
    {
        $userLoginStep = new AcceptanceTester\UserLoginSteps($scenario);
        $userLoginStep->doLogin($username, $password);
    }
}