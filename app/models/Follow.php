<?php

class Follow extends Eloquent
{
	protected $fillable = ['userId', 'followedId'];

	public static function followIfNotFollowed($userId)
	{
		$follower = Auth::user()->id;
		$followed = $userId;

		if (Follow::where('userId', $follower)->where('followedId', $followed)->count() < 1)
		{
			Follow::create([
				'userId' => $follower,
				'followedId' => $followed
			]);
		}
	}

	public static function currentUserHadFollowed($userId)
	{
		$follower = Auth::user()->id;
		$followed = $userId;
		if (Follow::where('userId', $follower)->where('followedId', $followed)->count() < 1)
		{
			return false;
		} else {
			return true;
		}
	}

}