<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $fillable = [
        'name', 'email', 'city', 'number', 'blood'
    ];

    protected $table = 'donors';
}
