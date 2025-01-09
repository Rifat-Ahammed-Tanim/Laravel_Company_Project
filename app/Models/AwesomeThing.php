<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AwesomeThing extends Model
{
    use HasFactory;

      // Add fillable properties
      protected $fillable = [
        'title',
        'description',
    ];
}
