<?php

$i = new AcceptanceTester($scenario);

$i->wantTo('Test that we see the text Hello! on the home page');
$i->amOnPage('/');
$i->see('Hello!');
