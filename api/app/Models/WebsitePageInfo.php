<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WebsitePageInfo
 * 
 * @property int $id
 * @property string $page_name
 * @property string $en_title
 * @property string $ar_title
 * @property string $ir_title
 * @property string $de_title
 * @property string $ru_title
 * @property string $fr_title
 * @property string $ur_title
 * @property string $es_title
 * @property string $zh_title
 * @property string $en_desc
 * @property string $ar_desc
 * @property string $ir_desc
 * @property string $de_desc
 * @property string $ru_desc
 * @property string $fr_desc
 * @property string $ur_desc
 * @property string $es_desc
 * @property string $zh_desc
 * @property string $en_og_title
 * @property string $ar_og_title
 * @property string $ir_og_title
 * @property string $de_og_title
 * @property string $ru_og_title
 * @property string $fr_og_title
 * @property string $ur_og_title
 * @property string $es_og_title
 * @property string $zh_og_title
 * @property string $og_image
 * @property Carbon $added_date
 * @property Carbon $modified_date
 * @property int $modify_user
 * @property int $page_status
 *
 * @package App\Models
 */
class WebsitePageInfo extends Model
{
	protected $table = 'website_page_info';
	public $timestamps = false;

	protected $casts = [
		'modify_user' => 'int',
		'page_status' => 'int'
	];

	protected $dates = [
		'added_date',
		'modified_date'
	];

	protected $fillable = [
		'page_name',
		'en_title',
		'ar_title',
		'ir_title',
		'de_title',
		'ru_title',
		'fr_title',
		'ur_title',
		'es_title',
		'zh_title',
		'en_desc',
		'ar_desc',
		'ir_desc',
		'de_desc',
		'ru_desc',
		'fr_desc',
		'ur_desc',
		'es_desc',
		'zh_desc',
		'en_og_title',
		'ar_og_title',
		'ir_og_title',
		'de_og_title',
		'ru_og_title',
		'fr_og_title',
		'ur_og_title',
		'es_og_title',
		'zh_og_title',
		'og_image',
		'added_date',
		'modified_date',
		'modify_user',
		'page_status'
	];
}
