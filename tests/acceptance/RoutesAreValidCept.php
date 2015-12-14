<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('check if each page exists');

$I->amOnPage('/');
$I->amOnPage('/about');
$I->amOnPage('/contact');
$I->amOnPage('/links');
$I->amONPage('/resume');
