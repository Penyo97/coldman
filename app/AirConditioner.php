<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AirConditioner extends Model
{
    protected $fillable = [
        'name', 'coldclass', 'hotclass','coldperfomance','hotperfomance','description','image'
    ];
}
