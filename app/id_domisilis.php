<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class id_domisilis extends Model
{
    protected $table = 'id_domisilis';
    protected $fillable = ['provinces_id', 'domisilis_name'];
}
