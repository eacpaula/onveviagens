<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 22 Jun 2018 00:38:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TipoHospedagem
 * 
 * @property int $id
 * @property string $titulo
 * @property int $disponivel
 *
 * @package App\Models
 */
class TipoHospedagem extends Eloquent
{
	protected $table = 'tipo_hospedagem';
	public $timestamps = false;

	protected $casts = [
		'disponivel' => 'int'
	];

	protected $fillable = [
		'titulo',
		'disponivel'
	];
}
