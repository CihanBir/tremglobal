<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mahalle
 * 
 * @property int $mahalle_id
 * @property string $mahalle_title
 * @property int $mahalle_key
 * @property int $mahalle_ilcekey
 *
 * @package App\Models
 */
class Mahalle extends Model
{
	protected $table = 'mahalle';
	protected $primaryKey = 'mahalle_id';
	public $timestamps = false;

	protected $casts = [
		'mahalle_key' => 'int',
		'mahalle_ilcekey' => 'int'
	];

	protected $fillable = [
		'mahalle_title',
		'mahalle_key',
		'mahalle_ilcekey'
	];
}
