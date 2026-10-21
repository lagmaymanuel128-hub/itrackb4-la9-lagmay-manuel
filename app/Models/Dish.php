<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $fillable = [
        'name',
        'main_ingredient',
        'origin',
        'spice_level',
        'is_vegetarian',
        'description',
    ];

    protected function casts(): array
    {
        return [
            'is_vegetarian' => 'boolean',
            'spice_level' => 'integer',
        ];
    }
}