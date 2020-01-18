<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sehir
 * 
 * @property int $sehir_id
 * @property string $sehir_title
 * @property int $sehir_key
 *
 * @package App\Models
 */
class Sehir extends Model
{
	protected $table = 'sehir';
	protected $primaryKey = 'sehir_id';
	public $timestamps = false;

	protected $casts = [
		'sehir_key' => 'int'
	];

	protected $fillable = [
		'sehir_title',
		'sehir_key'
	];
}
