<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BasvuruDurumlari
 * 
 * @property int $id
 * @property string $durum
 * @property int $durum_aktifmi
 *
 * @package App\Models
 */
class BasvuruDurumlari extends Model
{
	protected $table = 'basvuru_durumlari';
	public $timestamps = false;

	protected $casts = [
		'durum_aktifmi' => 'int'
	];

	protected $fillable = [
		'durum',
		'durum_aktifmi'
	];
}
