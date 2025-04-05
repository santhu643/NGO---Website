<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LandDevelopmentDetail
 * 
 * @property int $id
 * @property int $applicant_id
 * @property string $sf_number
 * @property float $latitude
 * @property float $longitude
 * @property string $soil_type
 * @property int $land_benefitted
 * @property string $work_proposed
 * @property int $area_benefited_by_proposal
 * @property int $any_other_work
 * @property int $pradan_contribution
 * @property int $farmer_contribution
 * @property int $total_estimate_amount
 * 
 * @property ApplicantDetail $applicant_detail
 *
 * @package App\Models
 */
class LandDevelopmentDetail extends Model
{
	protected $table = 'land_development_details';
	public $timestamps = false;

	protected $casts = [
		'applicant_id' => 'int',
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
		'applicant_id',
		'sf_number',
		'latitude',
		'longitude',
		'soil_type',
		'land_benefitted',
		'work_proposed',
		'area_benefited_by_proposal',
		'any_other_work',
		'pradan_contribution',
		'farmer_contribution',
		'total_estimate_amount'
	];

	public function applicant_detail()
	{
		return $this->belongsTo(ApplicantDetail::class, 'applicant_id');
	}
}
