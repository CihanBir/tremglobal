<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProjectNearby
 * 
 * @property int $id
 * @property int $project_id
 * @property string $nearby_title_en
 * @property string $nearby_distance_en
 * @property string $nearby_title_ar
 * @property string $nearby_distance_ar
 * @property string $nearby_title_ir
 * @property string $nearby_distance_ir
 * @property string $nearby_title_de
 * @property string $nearby_distance_de
 * @property string $nearby_title_fr
 * @property string $nearby_distance_fr
 * @property string $nearby_title_ur
 * @property string $nearby_distance_ur
 * @property string $nearby_title_ru
 * @property string $nearby_distance_ru
 * @property string $nearby_title_zh
 * @property string $nearby_distance_zh
 * @property string $nearby_title_es
 * @property string $nearby_distance_es
 * @property Carbon $added_date
 * @property int $nearby_status
 *
 * @package App\Models
 */
class ProjectNearby extends Model
{
	protected $table = 'project_nearby';
	public $timestamps = false;

	protected $casts = [
		'project_id' => 'int',
		'nearby_status' => 'int'
	];

	protected $dates = [
		'added_date'
	];

	protected $fillable = [
		'project_id',
		'nearby_title_en',
		'nearby_distance_en',
		'nearby_title_ar',
		'nearby_distance_ar',
		'nearby_title_ir',
		'nearby_distance_ir',
		'nearby_title_de',
		'nearby_distance_de',
		'nearby_title_fr',
		'nearby_distance_fr',
		'nearby_title_ur',
		'nearby_distance_ur',
		'nearby_title_ru',
		'nearby_distance_ru',
		'nearby_title_zh',
		'nearby_distance_zh',
		'nearby_title_es',
		'nearby_distance_es',
		'added_date',
		'nearby_status'
	];
}
