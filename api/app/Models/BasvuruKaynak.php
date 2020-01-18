<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BasvuruKaynak
 * 
 * @property int $id
 * @property string $kaynak
 * @property Carbon $eklenme_tarihi
 * @property int $durum
 *
 * @package App\Models
 */
class BasvuruKaynak extends Model
{
	protected $table = 'basvuru_kaynak';
	public $timestamps = false;

	protected $casts = [
		'durum' => 'int'
	];

	protected $dates = [
		'eklenme_tarihi'
	];

	protected $fillable = [
		'kaynak',
		'eklenme_tarihi',
		'durum'
	];
}
