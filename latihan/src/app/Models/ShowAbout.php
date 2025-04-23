<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ShowAbout extends Model
{
    //
    use HasFactory;
    protected $table = 'show_abouts';
    protected $fillable = [
        'title',
        'point',
        'description_1',
        'description_2',
        'description_3',
        'description_4',
        'logo_image',
        'profile_image'
    ];
}
