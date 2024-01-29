<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyTextureDetails extends Model
{
    use HasFactory;

    protected $primaryKey = 'property_id';

    public $timestamps = false;

    protected $fillable = [
        'property_id',
        'class',
        'type',
        'consistence',
        'munsell_table_color',
        'worm_quantity',
        'organisms_quantity',
        'no_munsell_table_color',
        'organisms'
    ];

    public function property() {
        return $this->belongsTo(Property::class);
    }
}
