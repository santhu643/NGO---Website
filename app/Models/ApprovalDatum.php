<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ApprovalDatum
 * 
 * @property int $id
 * @property int $applicant_id
 * @property int $field_inspector
 * @property string $site_approved_by
 * @property Carbon $date_of_inspection
 * @property Carbon $date_of_approval
 * 
 * @property ApplicantDetail $applicant_detail
 * @property User $user
 *
 * @package App\Models
 */
class ApprovalDatum extends Model
{
	protected $table = 'approval_data';
	public $timestamps = false;

	protected $casts = [
		'applicant_id' => 'int',
		'field_inspector' => 'int',
		'date_of_inspection' => 'datetime',
		'date_of_approval' => 'datetime'
	];

	protected $fillable = [
		'applicant_id',
		'field_inspector',
		'site_approved_by',
		'date_of_inspection',
		'date_of_approval'
	];

	public function applicant_detail()
	{
		return $this->belongsTo(ApplicantDetail::class, 'applicant_id');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'field_inspector');
	}
}
