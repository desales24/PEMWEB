<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\Hasfactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    //
    use Hasfactory;
    protected $table = 'footers';
    protected $fillable = [
        'footer'
    ];
}