<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PondForm
 * 
 * @property int $id
 * @property string $form_id
 * @property string $land_owner
 * @property string $patta
 * @property string $total_area
 * @property string $revenue
 * @property string $sf_no
 * @property string $soil_type
 * @property string $land_serve
 * @property string $field_insp
 * @property string $site_appr
 * @property string $date_of_insp
 * @property string $date_of_appr
 * @property string $length
 * @property string $depth
 * @property string $volume
 * @property string $pradan_cont
 * @property string $farmer_cont
 * @property string $total
 *
 * @package App\Models
 */
class PondForm extends Model
{
	protected $table = 'pond_form';
	public $timestamps = false;

	protected $fillable = [
		'form_id',
		'land_owner',
		'patta',
		'total_area',
		'revenue',
		'sf_no',
		'soil_type',
		'land_serve',
		'field_insp',
		'site_appr',
		'date_of_insp',
		'date_of_appr',
		'length',
		'depth',
		'volume',
		'pradan_cont',
		'farmer_cont',
		'total'
	];
}
