<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu_table extends Model
{
    use HasFactory;

    protected $fillable = [
        'food_name', 'discription', 'price', 'image'
    ];
}
