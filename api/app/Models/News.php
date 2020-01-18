<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class News
 * 
 * @property int $id
 * @property string $caption
 * @property string $short_caption
 * @property string $description
 * @property string $short_desc
 * @property string $keywords
 * @property string $news_image
 * @property Carbon $added_date
 * @property int $status
 *
 * @package App\Models
 */
class News extends Model
{
	protected $table = 'news';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int'
	];

	protected $dates = [
		'added_date'
	];

	protected $fillable = [
		'caption',
		'short_caption',
		'description',
		'short_desc',
		'keywords',
		'news_image',
		'added_date',
		'status'
	];
}
