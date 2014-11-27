<?php 
$I = new FunctionalTester($scenario);
$I->am('Guest');
$I->wantTo('SignUp');
$I->amOnPage('/');
$I->click('Sign Up!');
$I->seeCurrentUrlEquals('/register');

$I->fillField('Username:', 'JohnDoe');
$I->fillField('Email:', 'john@example.com');
$I->fillField('Password:', 'secret');
$I->click('Sign Up');

$I->seeCurrentUrlEquals('');

$I->seeRecord('users', [
	"username" => 'JohnDoe'
]);
