<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'image',
        'btn_text',
        'btn_url',
        'sub_title_1',
        'sub_title_2',
        'sub_title_3',
        'description_1',
        'description_2',
        'description_3'


    ];
}
