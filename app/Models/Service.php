<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    
    // Services
    protected $fillable=[
        'service_bricolage',
        'service_assistance',
        'image',
        'description'
    ];
}