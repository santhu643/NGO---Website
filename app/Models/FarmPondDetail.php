<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FarmPondDetail
 * 
 * @property int $id
 * @property int $applicant_id
 * @property string $sf_number
 * @property float $latitude
 * @property float $longitude
 * @property string $soil_type
 * @property int $land_benefitted
 * @property string $length
 * @property int $breadth
 * @property int $depth
 * @property int $volume
 * @property int $pradan_contribution
 * @property int $farmer_contribution
 * @property int $total_estimate_amount
 * 
 * @property ApplicantDetail $applicant_detail
 *
 * @package App\Models
 */
class FarmPondDetail extends Model
{
	protected $table = 'farm_pond_details';
	public $timestamps = false;

	protected $casts = [
		'applicant_id' => 'int',
		'latitude' => 'float',
		'longitude' => 'float',
		'land_benefitted' => 'int',
		'breadth' => 'int',
		'depth' => 'int',
		'volume' => 'int',
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
		'length',
		'breadth',
		'depth',
		'volume',
		'pradan_contribution',
		'farmer_contribution',
		'total_estimate_amount'
	];

	public function applicant_detail()
	{
		return $this->belongsTo(ApplicantDetail::class, 'applicant_id');
	}
}
