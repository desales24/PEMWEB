<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Information extends Model
{
    //
    use HasFactory;
    protected $table = 'informations';
    protected $fillable = [
        'name',
        'birthday',
        'phone',
        'email',
        'description_1',
        'description_2',
        'description_3',
        'description_4',
        'logo_1_image',
        'logo_2_image',
        'logo_3_image'
    ];
}
