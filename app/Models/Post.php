<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', // Add this line to allow mass assignment of user_id
        'title',
        'description',
        'selling_price',
        'location',
        'sale_status',
        'plot_area',
        'boundary_wall',
        'main_entrance_facing',
        'no_of_open_sides',
        'ownership_type',
        'water_supply',
        'width_of_road_facing_property',
        'avg_psf',
        'img_location', // Assuming you have an 'img_location' field for image path
        'approved',
    ];
}
