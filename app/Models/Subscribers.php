<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscribers extends Model
{
    
    protected $table = 'subscribers';
    protected $fillable = [
        'email',
    ];
    use HasFactory;
}
