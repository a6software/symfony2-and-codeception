<?php

$i = new AcceptanceTester($scenario);

$i->wantTo('Test that we see the text Our Header on the home page');
$i->amOnPage('/');
$i->see('Our header');
$i->click('Click me');
$i->waitForText('This is some off page content');
