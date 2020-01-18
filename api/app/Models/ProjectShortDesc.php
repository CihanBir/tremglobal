<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProjectShortDesc
 * 
 * @property int $id
 * @property int $project_id
 * @property string $en
 * @property string $ar
 * @property string $ir
 * @property Carbon $added_date
 * @property Carbon $modified_date
 * @property int $modify_user
 * @property int $durum
 *
 * @package App\Models
 */
class ProjectShortDesc extends Model
{
	protected $table = 'project_short_desc';
	public $timestamps = false;

	protected $casts = [
		'project_id' => 'int',
		'modify_user' => 'int',
		'durum' => 'int'
	];

	protected $dates = [
		'added_date',
		'modified_date'
	];

	protected $fillable = [
		'project_id',
		'en',
		'ar',
		'ir',
		'added_date',
		'modified_date',
		'modify_user',
		'durum'
	];
}
