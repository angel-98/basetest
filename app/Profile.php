<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'profiles';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['estado', 'avatar'];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user()
	{
		return $this->belongsTo('App\User', 'users_id', 'id');
	}

	/**
	 * @param $estado
	 * @return bool
	 */
	public function getEstadoAttribute($estado)
	{
		return (bool)$estado;
	}
}
