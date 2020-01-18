<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProjectFeaturesCat
 * 
 * @property int $id
 * @property string $category_name_en
 * @property string $category_name_ar
 * @property string $category_name_ir
 * @property string $category_name_zh
 * @property string $category_name_ur
 * @property string $category_name_fr
 * @property string $category_name_ru
 * @property string $category_name_es
 * @property string $category_name_de
 * @property Carbon $added_date
 * @property int $cat_status
 *
 * @package App\Models
 */
class ProjectFeaturesCat extends Model
{
	protected $table = 'project_features_cat';
	public $timestamps = false;

	protected $casts = [
		'cat_status' => 'int'
	];

	protected $dates = [
		'added_date'
	];

	protected $fillable = [
		'category_name_en',
		'category_name_ar',
		'category_name_ir',
		'category_name_zh',
		'category_name_ur',
		'category_name_fr',
		'category_name_ru',
		'category_name_es',
		'category_name_de',
		'added_date',
		'cat_status'
	];
}
