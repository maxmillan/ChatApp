<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userspects extends Model
{
    protected $fillable = [
        'name', 'date', 'phone','location','gender',
    ];
}
