<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BasvuruCagrilar
 * 
 * @property int $id
 * @property int $basvuru_id
 * @property int $kullanici_id
 * @property int $basvuru_durum
 * @property int $durum_neden
 * @property int $basvuru_arama_durum
 * @property int $basvuru_onceki_kullanici
 * @property Carbon $cagri_tarihi
 * @property Carbon $son_cagri_tarihi
 * @property int $basvuru_not
 * @property string $basvuru_projeler
 * @property int $arandi_mi
 *
 * @package App\Models
 */
class BasvuruCagrilar extends Model
{
	protected $table = 'basvuru_cagrilar';
	public $timestamps = false;

	protected $casts = [
		'basvuru_id' => 'int',
		'kullanici_id' => 'int',
		'basvuru_durum' => 'int',
		'durum_neden' => 'int',
		'basvuru_arama_durum' => 'int',
		'basvuru_onceki_kullanici' => 'int',
		'basvuru_not' => 'int',
		'arandi_mi' => 'int'
	];

	protected $dates = [
		'cagri_tarihi',
		'son_cagri_tarihi'
	];

	protected $fillable = [
		'basvuru_id',
		'kullanici_id',
		'basvuru_durum',
		'durum_neden',
		'basvuru_arama_durum',
		'basvuru_onceki_kullanici',
		'cagri_tarihi',
		'son_cagri_tarihi',
		'basvuru_not',
		'basvuru_projeler',
		'arandi_mi'
	];
}
