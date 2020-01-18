<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SatisOfisleri
 * 
 * @property int $id
 * @property string $ofis_adi
 * @property string $ofis_yetkilisi
 * @property Carbon $eklenme_tarihi
 * @property int $durum
 *
 * @package App\Models
 */
class SatisOfisleri extends Model
{
	protected $table = 'satis_ofisleri';
	public $timestamps = false;

	protected $casts = [
		'durum' => 'int'
	];

	protected $dates = [
		'eklenme_tarihi'
	];

	protected $fillable = [
		'ofis_adi',
		'ofis_yetkilisi',
		'eklenme_tarihi',
		'durum'
	];
}
