<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProjectRoom
 * 
 * @property int $room_id
 * @property int $project_id
 * @property string $rooms_salons
 * @property string $min_area
 * @property string $max_area
 * @property string $bathrooms
 * @property string $parking
 * @property float $min_price
 * @property float $max_price
 * @property int $currency
 * @property string $flat_image
 * @property string $flat_image_big
 * @property int $room_status
 * @property float $min_dollar
 * @property float $min_euro
 * @property float $min_tl
 * @property float $min_pound
 * @property float $min_riyal
 * @property float $min_yuan
 * @property float $min_ruble
 * @property float $max_dollar
 * @property float $max_euro
 * @property float $max_tl
 * @property float $max_pound
 * @property float $max_riyal
 * @property float $max_yuan
 * @property float $max_ruble
 *
 * @package App\Models
 */
class ProjectRoom extends Model
{
	protected $table = 'project_rooms';
	protected $primaryKey = 'room_id';
	public $timestamps = false;

	protected $casts = [
		'project_id' => 'int',
		'min_price' => 'float',
		'max_price' => 'float',
		'currency' => 'int',
		'room_status' => 'int',
		'min_dollar' => 'float',
		'min_euro' => 'float',
		'min_tl' => 'float',
		'min_pound' => 'float',
		'min_riyal' => 'float',
		'min_yuan' => 'float',
		'min_ruble' => 'float',
		'max_dollar' => 'float',
		'max_euro' => 'float',
		'max_tl' => 'float',
		'max_pound' => 'float',
		'max_riyal' => 'float',
		'max_yuan' => 'float',
		'max_ruble' => 'float'
	];

	protected $fillable = [
		'project_id',
		'rooms_salons',
		'min_area',
		'max_area',
		'bathrooms',
		'parking',
		'min_price',
		'max_price',
		'currency',
		'flat_image',
		'flat_image_big',
		'room_status',
		'min_dollar',
		'min_euro',
		'min_tl',
		'min_pound',
		'min_riyal',
		'min_yuan',
		'min_ruble',
		'max_dollar',
		'max_euro',
		'max_tl',
		'max_pound',
		'max_riyal',
		'max_yuan',
		'max_ruble'
	];
}
