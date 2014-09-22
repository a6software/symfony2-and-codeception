<?php

$i = new AcceptanceTester($scenario);
$i->wantTo('Ensure a user can log in when giving valid credentials.');
$i->amOnPage('/');
$i->click('Let me log in please, kthx');
$i->seeInCurrentUrl('/login');
$i->dontSee('Bad Credentials');
$i->fillField('#username', 'tommy');
$i->fillField('//body/div[1]/form/input[3]', 'password');
$i->click('Sign in');
$i->dontSee('Bad Credentials');
$i->seeInCurrentUrl('/secured-area');
$i->see('The secured area!');