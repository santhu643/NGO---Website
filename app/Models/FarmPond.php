<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FarmPond
 * 
 * @property int $id
 * @property int $form_id
 * @property string $sf_number
 * @property float|null $land_to_serve
 * @property string $soil_type
 * @property float $length
 * @property float $breadth
 * @property float $depth
 * @property float|null $volume_of_excavation
 * @property float|null $pradan_contribution
 * @property float|null $farmer_contribution
 * @property float|null $total_estimate_amount
 * 
 * @property Form $form
 *
 * @package App\Models
 */
class FarmPond extends Model
{
	protected $table = 'farm_ponds';
	public $timestamps = false;

	protected $casts = [
		'form_id' => 'int',
		'land_to_serve' => 'float',
		'length' => 'float',
		'breadth' => 'float',
		'depth' => 'float',
		'volume_of_excavation' => 'float',
		'pradan_contribution' => 'float',
		'farmer_contribution' => 'float',
		'total_estimate_amount' => 'float'
	];

	protected $fillable = [
		'form_id',
		'sf_number',
		'land_to_serve',
		'soil_type',
		'length',
		'breadth',
		'depth',
		'volume_of_excavation',
		'pradan_contribution',
		'farmer_contribution',
		'total_estimate_amount'
	];

	public function form()
	{
		return $this->belongsTo(Form::class);
	}
}
