<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $fillable = ['photo', 'heading', 'text', 'button_text', 'button_url'];
}
