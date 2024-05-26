<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'logo', 'favicon', 'top_bar_phone', 'top_bar_email', 'home_feature_status', 'home_room_total', 
        'home_room_status', 'home_testimonial_status', 'home_latest_post_total', 'home_latest_post_status', 
        'footer_address', 'footer_phone', 'footer_email', 'copyright', 'facebook', 'twitter', 'linkedin', 
        'pinterest', 'analytic_id', 'theme_color_1', 'theme_color_2'
    ];
}
