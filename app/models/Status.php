<?php


class Status extends Eloquent
{
	protected $fillable = ['body', 'user_id'];

	public function user()
	{
		return $this->belongsTo('User', 'user_id');
	}

	public static function ofUser($userId)
	{
		return Status::with('User')->where('user_id', $userId)->orderBy('created_at', 'desc')->get();
	}
}
