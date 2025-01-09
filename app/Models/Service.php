<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    // Add the fields you want to be mass assignable
    protected $fillable = [
        'title',
        'description',
        'icon',
    ];
}
