<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tuwitter extends Model
{
    protected $table = "tuwitter";
    use HasFactory;
    protected $fillable = [
        'content',
        'likes',
    ];
}
