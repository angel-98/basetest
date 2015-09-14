<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfilSkils extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'profile_skills';

	/**
	 * @var bool
	 */
	public $timestamps = false;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['user_id', 'estado', 'avatar'];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function profile()
	{
		return $this->belongsTo('App\Profile', 'profile_id', 'id');
	}

}
