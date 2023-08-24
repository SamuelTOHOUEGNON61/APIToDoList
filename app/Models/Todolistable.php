<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todolistable extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'status',
        'delai',
    ];

}
