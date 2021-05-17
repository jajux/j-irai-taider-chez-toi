<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assistance extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'assistance_numerique',
        'assistance_description',   
        'date_assistance',
        'horaire_assistance',
        'user_id',
        'bricolages_id',
    ];

    public function enregistrer_reservations_assistance()
    {
        return $this->hasMany(Assistance::class);
    }

    public function user()
    {
    return $this->belongsTo(User::class);
    }


}