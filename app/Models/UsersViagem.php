<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 22 Jun 2018 00:38:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class UsersViagem
 * 
 * @property int $id
 * @property int $id_users
 * @property int $id_viagem
 * 
 * @property \App\Models\Viagem $viagem
 *
 * @package App\Models
 */
class UsersViagem extends Eloquent
{
	protected $table = 'users_viagem';
	public $timestamps = false;

	protected $casts = [
		'id_users' => 'int',
		'id_viagem' => 'int'
	];

	protected $fillable = [
		'id_users',
		'id_viagem'
	];

	public function viagem()
	{
		return $this->belongsTo(\App\Models\Viagem::class, 'id_viagem');
	}
}
