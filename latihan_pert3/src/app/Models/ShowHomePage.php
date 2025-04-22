<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Hasfactory;

class ShowHomePage extends Model
{
    //
    use Hasfactory;
    protected $table = 'show_home_pages';
    protected $fillable = [
        'Profile_image',
        'logo_image',
        'title',
        'tulisan_1',
        'tulisan_2',
        'button',
        'contact'
    ];
}
