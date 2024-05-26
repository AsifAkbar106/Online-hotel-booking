<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'cart_heading', 'cart_status', 'checkout_heading', 'checkout_status', 'payment_heading', 
        'signup_heading', 'signup_status', 'signin_heading', 'signin_status'
    ];
}
