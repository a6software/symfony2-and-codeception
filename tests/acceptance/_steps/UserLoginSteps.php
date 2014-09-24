<?php
namespace AcceptanceTester;

class UserLoginSteps extends \AcceptanceTester
{
    public function doLogin($username, $password)
    {
        $i = $this;

        $i->amOnPage(\LoginPage::$URL);

        $i->fillField(\LoginPage::$usernameField, $username);
        $i->fillField(\LoginPage::$passwordField, $password);

        $i->click(\LoginPage::$loginButton);
    }
}