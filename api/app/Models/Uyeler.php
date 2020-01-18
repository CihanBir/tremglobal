<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Uyeler
 * 
 * @property int $id
 * @property string $ad
 * @property string $pass
 * @property int $oturum_kodu
 * @property int $yetki
 * @property int $silindi_mi
 *
 * @package App\Models
 */
class Uyeler extends Model
{
	protected $table = 'uyeler';
	public $timestamps = false;

	protected $casts = [
		'oturum_kodu' => 'int',
		'yetki' => 'int',
		'silindi_mi' => 'int'
	];

	protected $fillable = [
		'ad',
		'pass',
		'oturum_kodu',
		'yetki',
		'silindi_mi'
	];
}
