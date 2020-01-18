<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProjectFeature
 * 
 * @property int $id
 * @property int $cat_id
 * @property string $features_en
 * @property string $features_ar
 * @property string $features_ir
 * @property string $features_zh
 * @property string $features_ur
 * @property string $features_de
 * @property string $features_ru
 * @property string $features_fr
 * @property string $features_es
 * @property string $features_in
 * @property Carbon $added_date
 * @property int $features_status
 *
 * @package App\Models
 */
class ProjectFeature extends Model
{
	protected $table = 'project_features';
	public $timestamps = false;

	protected $casts = [
		'cat_id' => 'int',
		'features_status' => 'int'
	];

	protected $dates = [
		'added_date'
	];

	protected $fillable = [
		'cat_id',
		'features_en',
		'features_ar',
		'features_ir',
		'features_zh',
		'features_ur',
		'features_de',
		'features_ru',
		'features_fr',
		'features_es',
		'features_in',
		'added_date',
		'features_status'
	];
}
