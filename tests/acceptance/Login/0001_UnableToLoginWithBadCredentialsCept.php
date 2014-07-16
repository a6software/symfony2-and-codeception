<?php

$i = new AcceptanceTester($scenario);
$i->wantTo('Ensure a user is unable to log in when providing bad credentials');
$i->amOnPage('/');
$i->click('Let me log in please, kthx');
$i->seeInCurrentUrl('/login');
$i->dontSee('Bad Credentials');
$i->fillField('#username', 'sdgsadgdfgs');
$i->fillField('//body/div[1]/form/input[3]', 'jdskljadLSKJSAd');
$i->click('Sign in');
$i->see('Bad Credentials');
