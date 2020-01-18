<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Newsletter
 * 
 * @property int $id
 * @property string $fullname
 * @property string $email
 * @property string $lang
 * @property int $added
 * @property Carbon $date
 * @property int $newsletter_status
 *
 * @package App\Models
 */
class Newsletter extends Model
{
	protected $table = 'newsletter';
	public $timestamps = false;

	protected $casts = [
		'added' => 'int',
		'newsletter_status' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'fullname',
		'email',
		'lang',
		'added',
		'date',
		'newsletter_status'
	];
}
