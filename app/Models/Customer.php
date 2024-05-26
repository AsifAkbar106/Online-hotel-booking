<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    protected $fillable = [
        'name', 'email', 'password', 'token', 'status', 'photo', 'phone', 'country', 'address', 
        'state', 'city', 'zip'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
 