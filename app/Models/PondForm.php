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
 * @property string $irrigated_lands
 * @property string $revenue
 * @property string $livestocks
 * @property string $crop_season
 * @property string $well_irrigation
 * @property string $sf_no
 * @property string $soil_type
 * @property string $land_serve
 * @property string $field_insp
 * @property string $site_appr
 * @property string $type_of_work
 * @property string $date_of_insp
 * @property string $date_of_appr
 * @property string $length
 * @property string $depth
 * @property string $breadth
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
		'irrigated_lands',
		'revenue',
		'livestocks',
		'crop_season',
		'well_irrigation',
		'sf_no',
		'soil_type',
		'land_serve',
		'field_insp',
		'site_appr',
		'type_of_work',
		'date_of_insp',
		'date_of_appr',
		'length',
		'depth',
		'breadth',
		'volume',
		'pradan_cont',
		'farmer_cont',
		'total'
	];
}
