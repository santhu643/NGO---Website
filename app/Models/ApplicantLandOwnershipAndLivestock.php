<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ApplicantLandOwnershipAndLivestock
 * 
 * @property int $id
 * @property int $applicant_id
 * @property string $land_ownership
 * @property string $irrigation_well
 * @property int $irrigation_area
 * @property string $irrigated_lands
 * @property string $patta_number
 * @property int $total_area
 * @property string $revenue_village
 * @property string $crop_season
 * @property string $livestocks
 * 
 * @property ApplicantDetail $applicant_detail
 *
 * @package App\Models
 */
class ApplicantLandOwnershipAndLivestock extends Model
{
	protected $table = 'applicant_land_ownership_and_livestock';
	public $timestamps = false;

	protected $casts = [
		'applicant_id' => 'int',
		'irrigation_area' => 'int',
		'total_area' => 'int'
	];

	protected $fillable = [
		'applicant_id',
		'land_ownership',
		'irrigation_well',
		'irrigation_area',
		'irrigated_lands',
		'patta_number',
		'total_area',
		'revenue_village',
		'crop_season',
		'livestocks'
	];

	public function applicant_detail()
	{
		return $this->belongsTo(ApplicantDetail::class, 'applicant_id');
	}
}
