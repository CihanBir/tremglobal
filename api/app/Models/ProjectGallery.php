<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProjectGallery
 * 
 * @property int $id
 * @property int $project_id
 * @property string $image_array
 * @property string $image_int_array
 * @property string $image_thumb_array
 * @property string $image_big
 * @property string $image_int_big
 * @property string $image_1
 * @property string $image_2
 * @property string $image_3
 * @property string $image_4
 * @property string $image_5
 *
 * @package App\Models
 */
class ProjectGallery extends Model
{
	protected $table = 'project_gallery';
	public $timestamps = false;

	protected $casts = [
		'project_id' => 'int'
	];

	protected $fillable = [
		'project_id',
		'image_array',
		'image_int_array',
		'image_thumb_array',
		'image_big',
		'image_int_big',
		'image_1',
		'image_2',
		'image_3',
		'image_4',
		'image_5'
	];
}
