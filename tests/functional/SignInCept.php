<?php 
$I = new FunctionalTester($scenario);
$I->am('A larahub user');
$I->wantTo('Sign in');

$I->haveRecord('users', [
	'username' => 'johndoe',
	'email' => 'johndoe@example.com',
	'password' => Hash::make('secret')
]);

$I->amOnPage('/login');
$I->fillField('username', 'johndoe');
$I->fillField('password', 'secret');
$I->click('Sign In');

$I->amOnPage('/statuses');
