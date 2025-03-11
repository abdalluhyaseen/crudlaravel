<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class postal_code extends Model
{
    use HasFactory;
    protected $fillable = [
        'postal_code',
        'student_id', 
    ];
}



