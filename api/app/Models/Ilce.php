<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ilce
 * 
 * @property int $ilce_id
 * @property string $ilce_title
 * @property int $ilce_key
 * @property int $ilce_sehirkey
 *
 * @package App\Models
 */
class Ilce extends Model
{
	protected $table = 'ilce';
	protected $primaryKey = 'ilce_id';
	public $timestamps = false;

	protected $casts = [
		'ilce_key' => 'int',
		'ilce_sehirkey' => 'int'
	];

	protected $fillable = [
		'ilce_title',
		'ilce_key',
		'ilce_sehirkey'
	];
}
