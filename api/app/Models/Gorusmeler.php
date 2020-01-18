<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Gorusmeler
 * 
 * @property int $id
 * @property int $basvuru_id
 * @property int $danisman_id
 * @property string $gorusme_notu
 * @property Carbon $islem_tarihi
 * @property Carbon $randevu_tarihi
 * @property int $gorusme_durum
 *
 * @package App\Models
 */
class Gorusmeler extends Model
{
	protected $table = 'gorusmeler';
	public $timestamps = false;

	protected $casts = [
		'basvuru_id' => 'int',
		'danisman_id' => 'int',
		'gorusme_durum' => 'int'
	];

	protected $dates = [
		'islem_tarihi',
		'randevu_tarihi'
	];

	protected $fillable = [
		'basvuru_id',
		'danisman_id',
		'gorusme_notu',
		'islem_tarihi',
		'randevu_tarihi',
		'gorusme_durum'
	];
}
