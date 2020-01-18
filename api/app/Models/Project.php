<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Project
 * 
 * @property int $id
 * @property string $project_name
 * @property string $project_full_name
 * @property string $project_type
 * @property string $project_city
 * @property string $project_location
 * @property int $project_city_id
 * @property int $project_location_id
 * @property int $project_neighborhood_id
 * @property string $project_video
 * @property int $distance_type
 * @property string $distance_to_center
 * @property string $distance_to_airport
 * @property string $distance_to_beach
 * @property string $construction_year
 * @property string $construction_month
 * @property string $payment_method
 * @property float $starting_price
 * @property int $price_currency
 * @property string $ready_by
 * @property string $project_installment
 * @property string $project_preview
 * @property string $preview_rectangle
 * @property string $preview_square
 * @property string $project_cover_img
 * @property string $project_map
 * @property string $project_build_status
 * @property Carbon $planned_time
 * @property Carbon $finish_date
 * @property string $comission_rate
 * @property string $general_specs
 * @property string $security_specs
 * @property string $social_specs
 * @property string $sport_specs
 * @property string $technical_specs
 * @property string $top_specs
 * @property string $view_specs
 * @property string $project_consultant
 * @property string $project_consultant_phone
 * @property string $project_consultant_email
 * @property string $rent_guaranty
 * @property string $rent_guaranty_text
 * @property int $project_status
 * @property Carbon $added_date
 * @property Carbon $update_date
 * @property int $update_user
 *
 * @package App\Models
 */
class Project extends Model
{
	protected $table = 'projects';
	public $timestamps = false;

	protected $casts = [
		'project_city_id' => 'int',
		'project_location_id' => 'int',
		'project_neighborhood_id' => 'int',
		'distance_type' => 'int',
		'starting_price' => 'float',
		'price_currency' => 'int',
		'project_status' => 'int',
		'update_user' => 'int'
	];

	protected $dates = [
		'planned_time',
		'finish_date',
		'added_date',
		'update_date'
	];

	protected $fillable = [
		'project_name',
		'project_full_name',
		'project_type',
		'project_city',
		'project_location',
		'project_city_id',
		'project_location_id',
		'project_neighborhood_id',
		'project_video',
		'distance_type',
		'distance_to_center',
		'distance_to_airport',
		'distance_to_beach',
		'construction_year',
		'construction_month',
		'payment_method',
		'starting_price',
		'price_currency',
		'ready_by',
		'project_installment',
		'project_preview',
		'preview_rectangle',
		'preview_square',
		'project_cover_img',
		'project_map',
		'project_build_status',
		'planned_time',
		'finish_date',
		'comission_rate',
		'general_specs',
		'security_specs',
		'social_specs',
		'sport_specs',
		'technical_specs',
		'top_specs',
		'view_specs',
		'project_consultant',
		'project_consultant_phone',
		'project_consultant_email',
		'rent_guaranty',
		'rent_guaranty_text',
		'project_status',
		'added_date',
		'update_date',
		'update_user'
	];
}
