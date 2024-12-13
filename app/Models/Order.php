<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders'; // Explicitly specify the table name
    protected $primaryKey = 'order_id'; // Specify primary key if it's not 'id'

    protected $fillable = [
        'order_name', 'order_email', 'order_address', 'order_phone', 
        'order_date', 'order_time', 'order_dish', 'order_qty','order_status'
    ];
}
