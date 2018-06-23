<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 22 Jun 2018 00:38:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TipoPacote
 * 
 * @property int $id
 * @property string $titulo
 * @property int $disponivel
 * 
 * @property \Illuminate\Database\Eloquent\Collection $viagems
 *
 * @package App\Models
 */
class TipoPacote extends Eloquent
{
	protected $table = 'tipo_pacote';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'disponivel' => 'int'
	];

	protected $fillable = [
		'titulo',
		'disponivel'
	];

	public function viagems()
	{
		return $this->hasMany(\App\Models\Viagem::class, 'id_tipo_pacote');
	}
}
