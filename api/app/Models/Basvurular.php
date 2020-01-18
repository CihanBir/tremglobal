<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Basvurular
 * 
 * @property int $id
 * @property string $adsoyad
 * @property string $telefon
 * @property string $email
 * @property string $mesaj
 * @property int $proje_id
 * @property string $kaynak
 * @property string $utm_source
 * @property string $utm_medium
 * @property string $utm_term
 * @property int $danisman
 * @property Carbon $eklenme_tarihi
 * @property Carbon $son_islem_tarihi
 * @property string $interested_projects
 * @property string $interests
 * @property string $ulke
 * @property string $telefon_kodu
 * @property int $durum
 * @property int $silindi_mi
 *
 * @package App\Models
 */
class Basvurular extends Model
{
	protected $table = 'basvurular';
	public $timestamps = false;

	protected $casts = [
		'proje_id' => 'int',
		'danisman' => 'int',
		'durum' => 'int',
		'silindi_mi' => 'int'
	];

	protected $dates = [
		'eklenme_tarihi',
		'son_islem_tarihi'
	];

	protected $fillable = [
		'adsoyad',
		'telefon',
		'email',
		'mesaj',
		'proje_id',
		'kaynak',
		'utm_source',
		'utm_medium',
		'utm_term',
		'danisman',
		'eklenme_tarihi',
		'son_islem_tarihi',
		'interested_projects',
		'interests',
		'ulke',
		'telefon_kodu',
		'durum',
		'silindi_mi'
	];
}
