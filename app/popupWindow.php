<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class popupWindow extends Model
{
    protected $table = 'popup_windows';
    protected $fillable = [
        'title','url', 'remarks', 'updated_by'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
