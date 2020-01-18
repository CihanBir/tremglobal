<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BasvuruDurumNeden
 * 
 * @property int $id
 * @property int $durum_id
 * @property string $durum_neden
 * @property int $aktif_mi
 *
 * @package App\Models
 */
class BasvuruDurumNeden extends Model
{
	protected $table = 'basvuru_durum_neden';
	public $timestamps = false;

	protected $casts = [
		'durum_id' => 'int',
		'aktif_mi' => 'int'
	];

	protected $fillable = [
		'durum_id',
		'durum_neden',
		'aktif_mi'
	];
}
