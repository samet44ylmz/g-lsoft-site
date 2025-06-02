<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = [
        'title_1',
        'description_1',
        'title_2',
        'description_2',
        'title_3',
        'description_3',
        'title_4',
        'description_4',
        
    ];

    // You can add relationships or other model methods here if needed
}
