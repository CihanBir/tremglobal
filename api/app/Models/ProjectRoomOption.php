<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProjectRoomOption
 * 
 * @property int $id
 * @property int $room_id
 * @property string $room_salons
 * @property string $min_area
 * @property string $max_area
 * @property string $bathrooms
 * @property string $parking
 * @property float $min_price
 * @property float $max_price
 * @property int $currency
 * @property Carbon $added_date
 * @property string $flat_image
 * @property string $flat_image_big
 * @property int $room_status
 *
 * @package App\Models
 */
class ProjectRoomOption extends Model
{
	protected $table = 'project_room_option';
	public $timestamps = false;

	protected $casts = [
		'room_id' => 'int',
		'min_price' => 'float',
		'max_price' => 'float',
		'currency' => 'int',
		'room_status' => 'int'
	];

	protected $dates = [
		'added_date'
	];

	protected $fillable = [
		'room_id',
		'room_salons',
		'min_area',
		'max_area',
		'bathrooms',
		'parking',
		'min_price',
		'max_price',
		'currency',
		'added_date',
		'flat_image',
		'flat_image_big',
		'room_status'
	];
}
