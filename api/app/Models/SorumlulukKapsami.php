<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SorumlulukKapsami
 * 
 * @property int $id
 * @property int $user_id
 * @property int $yeni_formlar
 * @property int $raporlar
 * @property int $cagri_ekrani
 *
 * @package App\Models
 */
class SorumlulukKapsami extends Model
{
	protected $table = 'sorumluluk_kapsami';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'yeni_formlar' => 'int',
		'raporlar' => 'int',
		'cagri_ekrani' => 'int'
	];

	protected $fillable = [
		'user_id',
		'yeni_formlar',
		'raporlar',
		'cagri_ekrani'
	];
}
