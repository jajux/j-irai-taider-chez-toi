<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'resa_description',
        'date_rdv',
        'matin',
        'apres_midi',
    ];
    
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function user()
    {
    return $this->belongsTo(User::class);
    }
    
}