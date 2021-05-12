<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'service_id',
        'type_service',
        'resa_description',
        'date_rdv',
        'horaire_rdv',
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