<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'department',
        'municipality',
        'sidewalk',
        'name',
        'analyzed_crop',
        'weather',
        'trunk_name',
        'area',
        'coordinates'
    ];
}
