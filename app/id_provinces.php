<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class id_provinces extends Model
{
    protected $table = 'id_provinces';
    protected $fillable = [
        'province_name'
    ];
}
