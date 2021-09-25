<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jobvacancy extends Model
{
    protected $table = 'jobvacancies';
    protected $fillable = [
        'title',
        'location',
        'divisi',
        'part',
        'description',
    ];
    protected $casts = [
        'created_at' => 'datetime:d M, Y',
    ];
}
