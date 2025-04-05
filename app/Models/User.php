<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $username
 * @property string $password
 * @property string $designation
 * 
 * @property Collection|ApprovalDatum[] $approval_data
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'users';
	public $timestamps = false;

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'name',
		'username',
		'password',
		'designation'
	];

	public function approval_data()
	{
		return $this->hasMany(ApprovalDatum::class, 'field_inspector');
	}
}
