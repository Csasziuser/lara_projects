<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    // protected $table = 'vehicles';
    protected $fillable = [' license_plate','brand','model','manufacture_year', 
                            'fuel_type', 'mileage_km', 'daily_rental_price', 
                            'is_rented', 'ast_service_date'];
    
}
