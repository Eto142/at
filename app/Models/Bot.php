<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bot extends Model
{
    use HasFactory;
     protected $table = 'bots';
    protected $fillable = [
       'bot_id',
       'level',
        'name',
        'category',
        'image',
        'processed',
        'price',
        'active_connections',
        'rating',
        'percentage_rating',
        'action',

    ];
}
