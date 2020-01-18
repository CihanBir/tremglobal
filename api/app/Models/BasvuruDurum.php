<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BasvuruDurum
 * 
 * @property int $id
 * @property string $durum
 * @property int $aktif_mi
 *
 * @package App\Models
 */
class BasvuruDurum extends Model
{
	protected $table = 'basvuru_durum';
	public $timestamps = false;

	protected $casts = [
		'aktif_mi' => 'int'
	];

	protected $fillable = [
		'durum',
		'aktif_mi'
	];
}
