<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LandForm
 * 
 * @property int $id
 * @property int $form_id
 * @property string $ownership
 * @property string $well_irrigation
 * @property string $area_irrigated
 * @property string $irrigated_lands
 * @property string $patta
 * @property string $total_area
 * @property string $revenue
 * @property string $crop_season
 * @property string $livestocks
 * @property string $sf_no
 * @property string $soil_type
 * @property string $land_benefit
 * @property string $field_insp
 * @property string $site_app
 * @property string $date_of_ins
 * @property string $date_of_app
 * @property string $type_of_work
 * @property string $area_benefit
 * @property string $other_works
 * @property string $pradan_cont
 * @property string $farmer_cont
 * @property string $total_amount
 * @property string|null $area_pf
 *
 * @package App\Models
 */
class LandForm extends Model
{
	protected $table = 'land_form';
	public $timestamps = false;

	protected $casts = [
		'form_id' => 'int'
	];

	protected $fillable = [
		'form_id',
		'ownership',
		'well_irrigation',
		'area_irrigated',
		'irrigated_lands',
		'patta',
		'total_area',
		'revenue',
		'crop_season',
		'livestocks',
		'sf_no',
		'soil_type',
		'land_benefit',
		'field_insp',
		'site_app',
		'date_of_ins',
		'date_of_app',
		'type_of_work',
		'area_benefit',
		'other_works',
		'pradan_cont',
		'farmer_cont',
		'total_amount',
		'area_pf'
	];
}
