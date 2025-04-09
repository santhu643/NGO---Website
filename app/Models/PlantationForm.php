<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PlantationForm
 * 
 * @property int $id
 * @property int $form_id
 * @property string $sf_number
 * @property float $latitude
 * @property float $longitude
 * @property string $soil_type
 * @property int $land_benefitted
 * @property string $plantation_proposed
 * @property int $area_benefited_by_proposal
 * @property int $any_other_work
 * @property int $pradan_contribution
 * @property int $farmer_contribution
 * @property int $total_estimate_amount
 *
 * @package App\Models
 */
class PlantationForm extends Model
{
	protected $table = 'plant_form';
	public $timestamps = false;

	protected $casts = [
		'form_id' => 'int',
		'latitude' => 'float',
		'longitude' => 'float',
		'land_benefitted' => 'int',
		'area_benefited_by_proposal' => 'int',
		'any_other_work' => 'int',
		'pradan_contribution' => 'int',
		'farmer_contribution' => 'int',
		'total_estimate_amount' => 'int'
	];

	protected $fillable = [
		'form_id',
		'sf_number',
		'latitude',
		'longitude',
		'soil_type',
		'land_benefitted',
		'plantation_proposed',
		'area_benefited_by_proposal',
		'any_other_work',
		'pradan_contribution',
		'farmer_contribution',
		'total_estimate_amount'
	];
}
