<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ApplicantDetail
 * 
 * @property int $id
 * @property string $name
 * @property string $mobile_number
 * @property string $hamlet
 * @property string $panchayat
 * @property string $block
 * @property string $identity
 * @property string $id_number
 * @property string $gender
 * @property string $father_or_spouse
 * @property string $type_of_household
 * @property int $household_members_adults
 * @property int $household_members_child
 * @property int $household_members_occ_agri
 * @property int $household_members_occ_business
 * @property int $household_members_occ_others
 * @property string $special_category
 * @property int $special_category_nos
 * @property string $domestic_water_source
 * @property string $caste
 * @property string $house_ownership
 * @property string $house_type
 * @property string $drinking_water_source
 * @property string $potability
 * @property string $toilet_availability
 * @property string $toilet_usability
 * @property string $education
 * @property string $status
 * @property Carbon $timestamp
 * 
 * @property Collection|ApplicantLandOwnershipAndLivestock[] $applicant_land_ownership_and_livestocks
 * @property Collection|ApprovalDatum[] $approval_data
 * @property Collection|BankDetail[] $bank_details
 * @property Collection|FarmPondDetail[] $farm_pond_details
 * @property Collection|File[] $files
 * @property Collection|LandDevelopmentDetail[] $land_development_details
 * @property Collection|PlantationDetail[] $plantation_details
 *
 * @package App\Models
 */
class ApplicantDetail extends Model
{
	protected $table = 'applicant_details';
	public $timestamps = false;

	protected $casts = [
		'household_members_adults' => 'int',
		'household_members_child' => 'int',
		'household_members_occ_agri' => 'int',
		'household_members_occ_business' => 'int',
		'household_members_occ_others' => 'int',
		'special_category_nos' => 'int',
		'timestamp' => 'datetime'
	];

	protected $fillable = [
		'name',
		'mobile_number',
		'hamlet',
		'panchayat',
		'block',
		'identity',
		'id_number',
		'gender',
		'father_or_spouse',
		'type_of_household',
		'household_members_adults',
		'household_members_child',
		'household_members_occ_agri',
		'household_members_occ_business',
		'household_members_occ_others',
		'special_category',
		'special_category_nos',
		'domestic_water_source',
		'caste',
		'house_ownership',
		'house_type',
		'drinking_water_source',
		'potability',
		'toilet_availability',
		'toilet_usability',
		'education',
		'status',
		'timestamp'
	];

	public function applicant_land_ownership_and_livestocks()
	{
		return $this->hasMany(ApplicantLandOwnershipAndLivestock::class, 'applicant_id');
	}

	public function approval_data()
	{
		return $this->hasMany(ApprovalDatum::class, 'applicant_id');
	}

	public function bank_details()
	{
		return $this->hasMany(BankDetail::class, 'applicant_id');
	}

	public function farm_pond_details()
	{
		return $this->hasMany(FarmPondDetail::class, 'applicant_id');
	}

	public function files()
	{
		return $this->hasMany(File::class, 'applicant_id');
	}

	public function land_development_details()
	{
		return $this->hasMany(LandDevelopmentDetail::class, 'applicant_id');
	}

	public function plantation_details()
	{
		return $this->hasMany(PlantationDetail::class, 'applicant_id');
	}
}
