<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Takvim
 * 
 * @property int $id
 * @property string $plan
 * @property int $ekleyen_kullanici
 * @property int $basvuru_id
 * @property Carbon $eklenen_tarih
 * @property Carbon $randevu_tarihi
 * @property int $randevu_durum
 *
 * @package App\Models
 */
class Takvim extends Model
{
	protected $table = 'takvim';
	public $timestamps = false;

	protected $casts = [
		'ekleyen_kullanici' => 'int',
		'basvuru_id' => 'int',
		'randevu_durum' => 'int'
	];

	protected $dates = [
		'eklenen_tarih',
		'randevu_tarihi'
	];

	protected $fillable = [
		'plan',
		'ekleyen_kullanici',
		'basvuru_id',
		'eklenen_tarih',
		'randevu_tarihi',
		'randevu_durum'
	];
}
