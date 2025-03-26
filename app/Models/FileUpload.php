<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FileUpload
 * 
 * @property int $id
 * @property int $form_id
 * @property string|null $file_type
 * @property string $file_name
 * @property Carbon $uploaded_at
 * 
 * @property Form $form
 *
 * @package App\Models
 */
class FileUpload extends Model
{
	protected $table = 'file_uploads';
	public $timestamps = false;

	protected $casts = [
		'form_id' => 'int',
		'uploaded_at' => 'datetime'
	];

	protected $fillable = [
		'form_id',
		'file_type',
		'file_name',
		'uploaded_at'
	];

	public function form()
	{
		return $this->belongsTo(Form::class);
	}
}
