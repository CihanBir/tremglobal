<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Musteriler
 * 
 * @property int $id
 * @property string $ad
 * @property string $telefon
 * @property string $email
 * @property string $mesaj
 * @property int $kampanya
 * @property string $kaynak
 * @property Carbon $tarih
 * @property int $durum
 * @property string $notid
 *
 * @package App\Models
 */
class Musteriler extends Model
{
	protected $table = 'musteriler';
	public $timestamps = false;

	protected $casts = [
		'kampanya' => 'int',
		'durum' => 'int'
	];

	protected $dates = [
		'tarih'
	];

	protected $fillable = [
		'ad',
		'telefon',
		'email',
		'mesaj',
		'kampanya',
		'kaynak',
		'tarih',
		'durum',
		'notid'
	];
}
