<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News_Event extends Model
{
    protected $table = 'news_event';
    protected $fillable = [
        'type','image','description','title',
    ];
    use HasFactory;
}
