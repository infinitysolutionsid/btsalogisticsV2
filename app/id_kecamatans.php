<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class id_kecamatans extends Model
{
    protected $table = 'id_kecamatans';
    protected $fillable = ['domisilis_id', 'kecamatan_name'];
}
