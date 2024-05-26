<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookedRoom extends Model
{
    protected $fillable = ['booking_date', 'order_no', 'room_id'];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
