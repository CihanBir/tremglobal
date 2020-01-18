<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BasvuruNotlar
 * 
 * @property int $id
 * @property int $basvuru_id
 * @property int $danisman_id
 * @property int $admin_id
 * @property string $basvuru_not
 * @property int $basvuru_durum
 * @property int $durum_neden
 * @property int $gorusme_turu
 * @property Carbon $eklenme_tarih
 *
 * @package App\Models
 */
class BasvuruNotlar extends Model
{
	protected $table = 'basvuru_notlar';
	public $timestamps = false;

	protected $casts = [
		'basvuru_id' => 'int',
		'danisman_id' => 'int',
		'admin_id' => 'int',
		'basvuru_durum' => 'int',
		'durum_neden' => 'int',
		'gorusme_turu' => 'int'
	];

	protected $dates = [
		'eklenme_tarih'
	];

	protected $fillable = [
		'basvuru_id',
		'danisman_id',
		'admin_id',
		'basvuru_not',
		'basvuru_durum',
		'durum_neden',
		'gorusme_turu',
		'eklenme_tarih'
	];
}
