<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class File
 * 
 * @property int $id
 * @property int $applicant_id
 * @property string $identity
 * @property string $geotag_photo
 * @property string $patta
 * @property string $fmb
 * @property string $photo
 * @property string $passbook
 * 
 * @property ApplicantDetail $applicant_detail
 *
 * @package App\Models
 */
class File extends Model
{
	protected $table = 'files';
	public $timestamps = false;

	protected $casts = [
		'applicant_id' => 'int'
	];

	protected $fillable = [
		'applicant_id',
		'identity',
		'geotag_photo',
		'patta',
		'fmb',
		'photo',
		'passbook'
	];

	public function applicant_detail()
	{
		return $this->belongsTo(ApplicantDetail::class, 'applicant_id');
	}
}
