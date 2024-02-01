<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('property_visual_details', function (Blueprint $table) {
            $table->unsignedBigInteger('property_id');
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
            $table->float('structure');
            $table->float('porosity');
            $table->float('color');
            $table->float('horizon_breaking_strength');
            $table->float('aggregate_stability');
            $table->float('hardened_layers');
            $table->float('penetration_resistance');
            $table->float('infiltration_rate');
            $table->float('organic_material');
            $table->float('worms_quantity');
            $table->float('organisms_quantity');
            $table->float('root_growth');
            $table->float('electric_conductivity');
            $table->float('structure_evs');
            $table->float('porosity_evs');
            $table->float('color_evs');
            $table->float('horizon_breaking_strength_evs');
            $table->float('aggregate_stability_evs');
            $table->float('hardened_layers_evs');
            $table->float('penetration_resistance_evs');
            $table->float('infiltration_rate_evs');
            $table->float('organic_material_evs');
            $table->float('worms_quantity_evs');
            $table->float('organisms_quantity_evs');
            $table->float('root_growth_evs');
            $table->float('electric_conductivity_evs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_visual_details');
    }
};
