<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class id_kelurahans extends Model
{
    protected $table = 'id_kelurahans';
    protected $fillable = ['kecamatans_id', 'kelurahan_name'];
}
