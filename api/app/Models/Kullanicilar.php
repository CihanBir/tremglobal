<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Kullanicilar
 * 
 * @property int $id
 * @property string $kullanici_adi
 * @property string $sifre
 * @property string $adi_soyadi
 * @property string $eposta_adresi
 * @property int $yetki_grup_id
 * @property string $telefon_no
 * @property string $profil_foto
 * @property Carbon $eklenme_tarihi
 * @property Carbon $son_giris_tarihi
 * @property int $durum
 * @property int $silindi_mi
 *
 * @package App\Models
 */
class Kullanicilar extends Model
{
	protected $table = 'kullanicilar';
	public $timestamps = false;

	protected $casts = [
		'yetki_grup_id' => 'int',
		'durum' => 'int',
		'silindi_mi' => 'int'
	];

	protected $dates = [
		'eklenme_tarihi',
		'son_giris_tarihi'
	];

	protected $fillable = [
		'kullanici_adi',
		'sifre',
		'adi_soyadi',
		'eposta_adresi',
		'yetki_grup_id',
		'telefon_no',
		'profil_foto',
		'eklenme_tarihi',
		'son_giris_tarihi',
		'durum',
		'silindi_mi'
	];
}
