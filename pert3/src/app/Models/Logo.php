<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Hasfactory;

class Logo extends Model
{
    //
    use Hasfactory;
    protected $table = 'logos';
    protected $fillable = [
        'image'
    ];
}
