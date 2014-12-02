<?php 
$I = new FunctionalTester($scenario);
$I->am('Larahub user');
$I->wantTo('Follow a user');

$I->haveRecord('users', [
	'username' => 'johndoe',
	'email' => 'johndoe@example.com',
	'password' => Hash::make('secret')
]);
$I->haveRecord('users', [
	'username' => 'johnmoses',
	'email' => 'johnmoses@example.com',
	'password' => Hash::make('secret')
]);
$userFollowed = User::where('username', 'johndoe')->firstOrFail();
$userFollower = User::where('username', 'johnmoses')->firstOrFail();
$I->amOnPage('/login');
$I->fillField('username', 'johnmoses');
$I->fillField('password', 'secret');
$I->click('Sign In');

$I->amOnPage('/statuses');

$I->amOnPage('/users');
$I->click('johndoe');
$I->seeCurrentUrlEquals('/user/' . $userFollowed->id);
$I->click('Follow johndoe');

$I->seeRecord('follows', [
	'userId' => $userFollower->id,
	'followedId' => $userFollowed->id
]);
