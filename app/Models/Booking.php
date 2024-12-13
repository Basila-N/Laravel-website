<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'bookings'; // Explicitly specify the table name
    protected $primaryKey = 'booking_id'; // Specify primary key if it's not 'id'

    protected $fillable = [
        'book_name', 'book_email', 'book_phone', 'book_guest', 
        'book_date', 'book_time', 'book_addition', 'book_status'
    ];
}
