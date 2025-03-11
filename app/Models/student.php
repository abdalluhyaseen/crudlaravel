<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
     protected $fillable = [
        'name',
        'email',
    ];
   public function postal_code()
    {
        return $this->hasOne(Postal_Code::class);
    }
}
