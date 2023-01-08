<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor_donate extends Model
{
    use HasFactory;
    public function user_details()
    {
        return $this->belongsTo('App\Models\User', 'userId');
    }
}
