<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProjectDetail
 * 
 * @property int $id
 * @property int $project_id
 * @property string $en
 * @property string $ar
 * @property string $ir
 * @property string $zh
 * @property string $ur
 * @property string $de
 * @property string $fr
 * @property string $es
 * @property string $ru
 * @property string $ind
 * @property Carbon $added_date
 * @property Carbon $modified_date
 * @property int $modify_user
 * @property int $durum
 *
 * @package App\Models
 */
class ProjectDetail extends Model
{
	protected $table = 'project_details';
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
		'zh',
		'ur',
		'de',
		'fr',
		'es',
		'ru',
		'ind',
		'added_date',
		'modified_date',
		'modify_user',
		'durum'
	];
}
