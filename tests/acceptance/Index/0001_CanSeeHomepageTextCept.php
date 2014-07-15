<?php

$i = new AcceptanceTester($scenario);
$i->wantTo('Open up the root web page and see the text Our header');
$i->amOnPage('/');
$i->see('Our header');
