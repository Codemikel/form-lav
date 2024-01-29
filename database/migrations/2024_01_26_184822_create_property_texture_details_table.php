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
        Schema::create('property_texture_details', function (Blueprint $table) {
            $table->unsignedBigInteger('property_id');
            $table->foreign('property_id')->references('id')->on('properties');
            $table->string('class');
            $table->string('type');
            $table->string('consistence');
            $table->string('munsell_table_color');
            $table->float('worm_quantity');
            $table->float('organisms_quantity');
            $table->string('no_munsell_table_color');
            $table->string('organisms');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_texture_details');
    }
};
