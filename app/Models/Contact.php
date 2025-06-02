<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'title',
        'description',
        'adres_title',
        'adres_description',
        'phone_title',
        'phone_description',
        'hour_title',
        'hour_description',
        'name',
        'service',
        'message',
        'email',
        'phone',
        
        
    ];
}
