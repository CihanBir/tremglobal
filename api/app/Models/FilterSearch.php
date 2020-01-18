<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FilterSearch
 * 
 * @property int $id
 * @property string $user_ip
 * @property string $search_query
 * @property Carbon $query_date
 *
 * @package App\Models
 */
class FilterSearch extends Model
{
	protected $table = 'filter_search';
	public $timestamps = false;

	protected $dates = [
		'query_date'
	];

	protected $fillable = [
		'user_ip',
		'search_query',
		'query_date'
	];
}
