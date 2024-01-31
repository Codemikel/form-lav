<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyVisualDetails extends Model
{
    use HasFactory;
    protected $primaryKey = 'property_id';
    public $timestamps = false;

    protected $fillable = [
        'property_id',
        'structure',
        'porosity',
        'color',
        'horizon_breaking_strength',
        'aggregate_stability',
        'hardened_layers',
        'penetration_resistance',
        'infiltration_rate',
        'organic_material',
        'worms_quantity',
        'organisms_quantity',
        'root_growth',
        'electric_conductivity',
        'structure_evs',
        'porosity_evs',
        'color_evs',
        'horizon_breaking_strength_evs',
        'aggregate_stability_evs',
        'hardened_layers_evs',
        'penetration_resistance_evs',
        'infiltration_rate_evs',
        'organic_material_evs',
        'worms_quantity_evs',
        'organisms_quantity_evs',
        'root_growth_evs',
        'electric_conductivity_evs'
    ];

    public function property() {
        return $this->belongsTo(Property::class);
    }
}
