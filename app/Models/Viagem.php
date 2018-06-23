<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 22 Jun 2018 00:38:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Viagem
 * 
 * @property int $id
 * @property int $id_tipo_pacote
 * @property string $titulo
 * @property float $valor
 * @property string $descricao
 * @property int $diaria
 * @property string $local
 * @property string $dormitorio
 * @property \Carbon\Carbon $data_inicial
 * @property \Carbon\Carbon $data_final
 * @property int $id_tipo_hospedagem
 * 
 * @property \App\Models\TipoPacote $tipo_pacote
 * @property \Illuminate\Database\Eloquent\Collection $users_viagems
 *
 * @package App\Models
 */
class Viagem extends Eloquent
{
	protected $table = 'viagem';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_tipo_pacote' => 'int',
		'valor' => 'float',
		'diaria' => 'int',
		'id_tipo_hospedagem' => 'int'
	];

	protected $dates = [
		'data_inicial',
		'data_final'
	];

	protected $fillable = [
		'id_tipo_pacote',
		'titulo',
		'valor',
		'descricao',
		'diaria',
		'local',
		'dormitorio',
		'data_inicial',
		'data_final',
		'id_tipo_hospedagem'
	];

	public function tipo_pacote()
	{
		return $this->belongsTo(\App\Models\TipoPacote::class, 'id_tipo_pacote');
	}

	public function users_viagems()
	{
		return $this->hasMany(\App\Models\UsersViagem::class, 'id_viagem');
	}
}
