<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 16 Oct 2017 01:45:31 +0000.
 */

namespace App\Models\Database;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class HlInitFinal
 * 
 * @property int $id
 * @property string $name
 * 
 * @property \Illuminate\Database\Eloquent\Collection $hl_pations
 *
 * @package App\Models\Database
 */
class HlInitFinal extends Eloquent
{
	protected $table = 'hl_init_final';
	public $timestamps = false;

	protected $fillable = [
		'name'
	];

	public function pations()
	{
		return $this->hasMany(\App\Models\Database\HlPation::class, 'init_final_id');
	}
}
