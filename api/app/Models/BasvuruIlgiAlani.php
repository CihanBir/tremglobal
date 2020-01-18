<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BasvuruIlgiAlani
 * 
 * @property int $id
 * @property string $ilgi_alani_en
 * @property string $ilgi_alani_ar
 * @property string $ilgi_alani_ir
 * @property string $ilgi_alani_de
 * @property string $ilgi_alani_tr
 * @property int $durum
 *
 * @package App\Models
 */
class BasvuruIlgiAlani extends Model
{
	protected $table = 'basvuru_ilgi_alani';
	public $timestamps = false;

	protected $casts = [
		'durum' => 'int'
	];

	protected $fillable = [
		'ilgi_alani_en',
		'ilgi_alani_ar',
		'ilgi_alani_ir',
		'ilgi_alani_de',
		'ilgi_alani_tr',
		'durum'
	];
}
