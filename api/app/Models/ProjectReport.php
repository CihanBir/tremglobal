<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProjectReport
 * 
 * @property int $id
 * @property string $location_city
 * @property string $location_name
 * @property string $location_data
 * @property int $is_exist
 * @property Carbon $added_date
 *
 * @package App\Models
 */
class ProjectReport extends Model
{
	protected $table = 'project_reports';
	public $timestamps = false;

	protected $casts = [
		'is_exist' => 'int'
	];

	protected $dates = [
		'added_date'
	];

	protected $fillable = [
		'location_city',
		'location_name',
		'location_data',
		'is_exist',
		'added_date'
	];
}
