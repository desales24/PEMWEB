<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ShowHomePage extends Model
{
    //
    use HasFactory;
    protected $table = 'show_home_pages';
    protected $fillable = [
        'profile_image',
        'logo_image',
        'title',
        'tulisan_1',
        'tulisan_2',
        'button',
        'contact'
    ];
}
