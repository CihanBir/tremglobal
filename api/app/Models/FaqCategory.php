<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FaqCategory
 * 
 * @property int $id
 * @property string $faq_en
 * @property string $faq_ar
 * @property string $faq_ir
 * @property string $faq_ur
 * @property string $faq_fr
 * @property string $faq_de
 * @property string $faq_es
 * @property string $faq_ru
 * @property string $faq_zh
 * @property string $faq_in
 * @property Carbon $faq_added_date
 * @property int $faq_status
 *
 * @package App\Models
 */
class FaqCategory extends Model
{
	protected $table = 'faq_categories';
	public $timestamps = false;

	protected $casts = [
		'faq_status' => 'int'
	];

	protected $dates = [
		'faq_added_date'
	];

	protected $fillable = [
		'faq_en',
		'faq_ar',
		'faq_ir',
		'faq_ur',
		'faq_fr',
		'faq_de',
		'faq_es',
		'faq_ru',
		'faq_zh',
		'faq_in',
		'faq_added_date',
		'faq_status'
	];
}
