<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bricolage extends Model
{
    use HasFactory;
        
    protected $fillable = [
        'bricolage',
        'bricolage_description',
        'date_bricolage',
        'horaire_bricolage',
        'user_id',
        'assistances_id',
    ];

    public function enregistrer_reservations_bricolage()
    {
        return $this->hasMany(Bricolage::class);
    }

    public function user()
    {
    return $this->belongsTo(User::class);
    }

}