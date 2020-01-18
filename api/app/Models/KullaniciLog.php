<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class KullaniciLog
 * 
 * @property int $id
 * @property string $islem_baslik
 * @property string $islem
 * @property int $danisman
 * @property int $admin_id
 * @property int $basvuru_id
 * @property Carbon $islem_tarihi
 *
 * @package App\Models
 */
class KullaniciLog extends Model
{
	protected $table = 'kullanici_log';
	public $timestamps = false;

	protected $casts = [
		'danisman' => 'int',
		'admin_id' => 'int',
		'basvuru_id' => 'int'
	];

	protected $dates = [
		'islem_tarihi'
	];

	protected $fillable = [
		'islem_baslik',
		'islem',
		'danisman',
		'admin_id',
		'basvuru_id',
		'islem_tarihi'
	];
}
