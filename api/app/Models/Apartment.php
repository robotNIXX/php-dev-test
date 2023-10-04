<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    protected $table = 'apartments';

    public $timestamps = false;

    protected $fillable = [
            'name',
            'price',
            'bedrooms',
            'bathrooms',
            'storeys',
            'garages',
        ];
}