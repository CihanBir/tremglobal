<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ArticlesIr
 * 
 * @property int $id
 * @property string $article_link
 * @property string $article_title
 * @property string $page_title
 * @property string $page_description
 * @property string $article_text
 * @property string $article_short_desc
 * @property string $article_image
 * @property int $article_category
 * @property Carbon $added_date
 * @property Carbon $publish_date
 * @property int $is_published
 * @property int $article_status
 *
 * @package App\Models
 */
class ArticlesIr extends Model
{
	protected $table = 'articles_ir';
	public $timestamps = false;

	protected $casts = [
		'article_category' => 'int',
		'is_published' => 'int',
		'article_status' => 'int'
	];

	protected $dates = [
		'added_date',
		'publish_date'
	];

	protected $fillable = [
		'article_link',
		'article_title',
		'page_title',
		'page_description',
		'article_text',
		'article_short_desc',
		'article_image',
		'article_category',
		'added_date',
		'publish_date',
		'is_published',
		'article_status'
	];
}
