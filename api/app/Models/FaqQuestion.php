<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FaqQuestion
 * 
 * @property int $id
 * @property int $faq_cat_id
 * @property string $faq_question_en
 * @property string $faq_answer_en
 * @property string $faq_question_ar
 * @property string $faq_answer_ar
 * @property string $faq_question_ir
 * @property string $faq_answer_ir
 * @property string $faq_question_ur
 * @property string $faq_answer_ur
 * @property string $faq_question_fr
 * @property string $faq_answer_fr
 * @property string $faq_question_de
 * @property string $faq_answer_de
 * @property string $faq_question_es
 * @property string $faq_answer_es
 * @property string $faq_question_zh
 * @property string $faq_answer_zh
 * @property string $faq_question_ru
 * @property string $faq_answer_ru
 * @property string $faq_question_in
 * @property string $faq_answer_in
 * @property Carbon $faq_added_date
 * @property int $faq_user
 * @property int $faq_status
 *
 * @package App\Models
 */
class FaqQuestion extends Model
{
	protected $table = 'faq_questions';
	public $timestamps = false;

	protected $casts = [
		'faq_cat_id' => 'int',
		'faq_user' => 'int',
		'faq_status' => 'int'
	];

	protected $dates = [
		'faq_added_date'
	];

	protected $fillable = [
		'faq_cat_id',
		'faq_question_en',
		'faq_answer_en',
		'faq_question_ar',
		'faq_answer_ar',
		'faq_question_ir',
		'faq_answer_ir',
		'faq_question_ur',
		'faq_answer_ur',
		'faq_question_fr',
		'faq_answer_fr',
		'faq_question_de',
		'faq_answer_de',
		'faq_question_es',
		'faq_answer_es',
		'faq_question_zh',
		'faq_answer_zh',
		'faq_question_ru',
		'faq_answer_ru',
		'faq_question_in',
		'faq_answer_in',
		'faq_added_date',
		'faq_user',
		'faq_status'
	];
}
