<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'featured_photo', 'name', 'description', 'price', 'total_rooms', 'size', 'amenities', 
        'total_beds', 'total_bathrooms', 'total_balconies', 'total_guests', 'video_id'
    ];

    public function rRoomPhoto(){
        return $this->hasMany(RoomPhoto::class);
    }
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function bookedRooms()
    {
        return $this->hasMany(BookedRoom::class);
    }
}
