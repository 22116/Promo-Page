<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 16 Oct 2017 01:45:31 +0000.
 */

namespace App\Models\Database;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class HlPation
 * 
 * @property int $id
 * @property int $age
 * @property int $height
 * @property int $sex_id
 * @property int $survival_id
 * @property int $shock_type_id
 * @property int $sp
 * @property int $map
 * @property int $hr
 * @property int $dp
 * @property int $mvp
 * @property int $bsa
 * @property int $ci
 * @property int $at
 * @property int $mct
 * @property int $uo
 * @property int $pvi
 * @property int $rci
 * @property int $hgb
 * @property int $hct
 * @property int $init_final_id
 * 
 * @property \App\Models\Database\HlInitFinal $hl_init_final
 * @property \App\Models\Database\HlSex $hl_sex
 * @property \App\Models\Database\HlShockType $hl_shock_type
 * @property \App\Models\Database\HlSurvival $hl_survival
 *
 * @package App\Models\Database
 */
class HlPation extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'age' => 'int',
		'height' => 'int',
		'sex_id' => 'int',
		'survival_id' => 'int',
		'shock_type_id' => 'int',
		'sp' => 'int',
		'map' => 'int',
		'hr' => 'int',
		'dp' => 'int',
		'mvp' => 'int',
		'bsa' => 'int',
		'ci' => 'int',
		'at' => 'int',
		'mct' => 'int',
		'uo' => 'int',
		'pvi' => 'int',
		'rci' => 'int',
		'hgb' => 'int',
		'hct' => 'int',
		'init_final_id' => 'int'
	];

	protected $fillable = [
		'id',
		'age',
		'height',
		'sex_id',
		'survival_id',
		'shock_type_id',
		'sp',
		'map',
		'hr',
		'dp',
		'mvp',
		'bsa',
		'ci',
		'at',
		'mct',
		'uo',
		'pvi',
		'rci',
		'hgb',
		'hct',
		'init_final_id'
	];

	public function init_final()
	{
		return $this->belongsTo(\App\Models\Database\HlInitFinal::class, 'init_final_id');
	}

	public function sex()
	{
		return $this->belongsTo(\App\Models\Database\HlSex::class, 'sex_id');
	}

	public function shock_type()
	{
		return $this->belongsTo(\App\Models\Database\HlShockType::class, 'shock_type_id');
	}

	public function survival()
	{
		return $this->belongsTo(\App\Models\Database\HlSurvival::class, 'survival_id');
	}
}
