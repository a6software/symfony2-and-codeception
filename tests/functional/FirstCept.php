<?php 
$i = new FunctionalTester($scenario);
$i->wantTo('perform actions and see result');
$i->amOnPage('/');
$i->see('Some other text here');