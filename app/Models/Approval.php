<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Approval
 * 
 * @property int $id
 * @property int $form_id
 * @property string|null $field_inspection_by
 * @property string|null $site_approved_by
 * @property Carbon|null $date_of_inspection
 * @property Carbon|null $date_of_approval
 * @property string|null $digital_signature
 * 
 * @property Form $form
 *
 * @package App\Models
 */
class Approval extends Model
{
	protected $table = 'approvals';
	public $timestamps = false;

	protected $casts = [
		'form_id' => 'int',
		'date_of_inspection' => 'datetime',
		'date_of_approval' => 'datetime'
	];

	protected $fillable = [
		'form_id',
		'field_inspection_by',
		'site_approved_by',
		'date_of_inspection',
		'date_of_approval',
		'digital_signature'
	];

	public function form()
	{
		return $this->belongsTo(Form::class);
	}
}
