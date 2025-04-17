<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BankDetail
 * 
 * @property int $id
 * @property int $form_id
 * @property string $account_holder_name
 * @property string $account_number
 * @property string $bank_name
 * @property string $branch
 * @property string $ifsc_code
 * @property string $farmer_ack
 * 
 * @property Form $form
 *
 * @package App\Models
 */
class BankDetail extends Model
{
	protected $table = 'bank_details';
	public $timestamps = false;

	protected $casts = [
		'form_id' => 'int'
	];

	protected $fillable = [
		'form_id',
		'account_holder_name',
		'account_number',
		'bank_name',
		'branch',
		'ifsc_code',
		'farmer_ack'
	];

	public function form()
	{
		return $this->belongsTo(Form::class);
	}
}
