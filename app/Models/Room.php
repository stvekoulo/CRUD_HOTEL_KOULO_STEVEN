<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = ['hotel_name','description', 'room_name', 'price', 'beds', 'max_adults', 'max_children', 'attributes', 'status'];
}
 