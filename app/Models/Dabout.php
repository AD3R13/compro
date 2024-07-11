<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dabout extends Model
{
    use HasFactory;

    protected $fillable = [
        'lahir', 'tempat_lahir', 'umur', 'agama', 'gender', 'phone', 'alamat', 'email'
    ];
}
