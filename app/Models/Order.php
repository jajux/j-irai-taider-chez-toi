<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    
    // une commande a plusieurs services
    public function products()
    {
        return $this->hasMany(OrderProduct::class);
    }

    // une commande pour un utilisateur
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}