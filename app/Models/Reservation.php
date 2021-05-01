<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

public function service()
{
    return $this->hasMany(Reservation::class);
}

public function user()
{
    return $this->belongsTo(User::class);
}
    
}