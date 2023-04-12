<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu_details extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // relation to variant
    function rel_to_var(){
        return $this->belongsTo(food_variant::class, 'food_variant_id');
    }

    // relation to menu
    function rel_to_menu(){
        return $this->belongsTo(food_manu::class, 'menu_id');
    }
    // relation to variant
    function rel_to_day(){
        return $this->belongsTo(day::class, 'day_id');
    }
}
