<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertising extends Model
{
    use HasFactory;

    protected $fillable =[
        'product',
        'audience',
        'budget',
        'duration_minutes'
    ];
}
