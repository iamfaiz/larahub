<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * Fillable fields for the user
	 * @var array
	 */
	protected $fillable = ['username', 'password', 'email', 'first_name', 'last_name'];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	/**
	 * The primary key for the users table
	 * @var string
	 */
	protected $primaryKey = "id";

	/**
	 * Get the users that one has followed
	 */
	public static function getFollows($userId)
	{
		return Follow::where('userId', $userId)->get(['followedId']);
	}

	public static function getFeedForAuthUser()
	{
		$statuses = Status::ofUser(Auth::user()->id);
		foreach(User::getFollows(Auth::user()->id) as $followedUser)
		{
			if (sizeof(Status::ofUser($followedUser->followedId)) !== 0)
			{
				$statuses[] = Status::ofUser($followedUser->followedId)[0];
			}
		}
		$arrayStatus = self::convertToArray($statuses);
		usort($arrayStatus, function($a, $b)
		{
		    return strcmp($a->updated_at, $b->updated_at);
		});
		return array_reverset ($arrayStatus);
	}

	public static function convertToArray($data)
	{
	    $output = array();
	    foreach ($data as $item)
	        $output[] = $item;
	    return $output;
	}

}
