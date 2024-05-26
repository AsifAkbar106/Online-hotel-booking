<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $fillable = [
        'order_id', 'room_id', 'order_no', 'checkin_date', 'checkout_date', 'adult', 'children', 'subtotal'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
