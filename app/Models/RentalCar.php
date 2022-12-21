<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RentalCar extends Model
{
    protected $table = 'rental_cars';

    protected $fillable = [
        'id',
        'name',
        /*'category_id',
        'category_name',
        'content',
        'user_id',
        'user_name',
        'user_company',
        'has_attachment'*/
    ];
}
