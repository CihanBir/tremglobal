<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Notlar
 * 
 * @property int $id
 * @property int $mid
 * @property int $ekleyen
 * @property Carbon $tarih
 * @property string $bilgi
 *
 * @package App\Models
 */
class Notlar extends Model
{
	protected $table = 'notlar';
	public $timestamps = false;

	protected $casts = [
		'mid' => 'int',
		'ekleyen' => 'int'
	];

	protected $dates = [
		'tarih'
	];

	protected $fillable = [
		'mid',
		'ekleyen',
		'tarih',
		'bilgi'
	];
}
