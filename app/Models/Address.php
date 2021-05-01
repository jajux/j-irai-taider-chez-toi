<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    // Addresse
    protected $fillable = [
        'civility',
        'firstname',
        'lastname', 
        'company',
        'address',
        'bp',
       'postal',
        'city',
        'phone',
      ];
}