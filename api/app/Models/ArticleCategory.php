<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ArticleCategory
 * 
 * @property int $id
 * @property string $category
 * @property int $durum
 *
 * @package App\Models
 */
class ArticleCategory extends Model
{
	protected $table = 'article_category';
	public $timestamps = false;

	protected $casts = [
		'durum' => 'int'
	];

	protected $fillable = [
		'category',
		'durum'
	];
}
