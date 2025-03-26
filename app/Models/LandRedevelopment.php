<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LandRedevelopment
 * 
 * @property int $id
 * @property int $form_id
 * @property string $sf_number
 * @property float|null $land_to_benefit
 * @property string|null $type_of_work_proposed
 * @property float|null $area_benefited
 * @property string|null $any_other_works
 * @property float|null $pradan_contribution
 * @property float|null $farmer_contribution
 * @property float|null $total_estimate_amount
 * 
 * @property Form $form
 *
 * @package App\Models
 */
class LandRedevelopment extends Model
{
	protected $table = 'land_redevelopment';
	public $timestamps = false;

	protected $casts = [
		'form_id' => 'int',
		'land_to_benefit' => 'float',
		'area_benefited' => 'float',
		'pradan_contribution' => 'float',
		'farmer_contribution' => 'float',
		'total_estimate_amount' => 'float'
	];

	protected $fillable = [
		'form_id',
		'sf_number',
		'land_to_benefit',
		'type_of_work_proposed',
		'area_benefited',
		'any_other_works',
		'pradan_contribution',
		'farmer_contribution',
		'total_estimate_amount'
	];

	public function form()
	{
		return $this->belongsTo(Form::class);
	}
}
