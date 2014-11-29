<?php


class Status extends Eloquent
{
	protected $fillable = ['body', 'user_id'];

	public function user()
	{
		return $this->belongsTo('User', 'user_id');
	}
}
