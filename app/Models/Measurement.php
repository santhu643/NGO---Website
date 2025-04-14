<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Measurement
 * 
 * @property int $id
 * @property string $form_id
 * @property string $len
 * @property string $bre
 * @property string $dep
 * @property string $vol
 *
 * @package App\Models
 */
class Measurement extends Model
{
	protected $table = 'measurement';
	public $timestamps = false;

	protected $fillable = [
		'form_id',
		'len',
		'bre',
		'dep',
		'vol'
	];
}
