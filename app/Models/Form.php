<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Form
 * 
 * @property int $id
 * @property string $form_type
 * @property string $farmer_name
 * @property string $mobile_number
 * @property string $gender
 * @property string|null $father_spouse
 * @property int|null $household_members
 * @property string $identity_card_type
 * @property string $identity_card_number
 * @property string|null $hamlet
 * @property string|null $panchayat
 * @property string|null $block
 * @property Carbon $created_at
 * 
 * @property Collection|Approval[] $approvals
 * @property Collection|BankDetail[] $bank_details
 * @property Collection|FarmPond[] $farm_ponds
 * @property Collection|FileUpload[] $file_uploads
 * @property Collection|LandRedevelopment[] $land_redevelopments
 *
 * @package App\Models
 */
class Form extends Model
{
	protected $table = 'forms';
	public $timestamps = false;

	protected $casts = [
		'household_members' => 'int'
	];

	protected $fillable = [
		'form_type',
		'farmer_name',
		'mobile_number',
		'gender',
		'father_spouse',
		'household_members',
		'identity_card_type',
		'identity_card_number',
		'hamlet',
		'panchayat',
		'block'
	];

	public function approvals()
	{
		return $this->hasMany(Approval::class);
	}

	public function bank_details()
	{
		return $this->hasMany(BankDetail::class);
	}

	public function farm_ponds()
	{
		return $this->hasMany(FarmPond::class);
	}

	public function file_uploads()
	{
		return $this->hasMany(FileUpload::class);
	}

	public function land_redevelopments()
	{
		return $this->hasMany(LandRedevelopment::class);
	}
}
