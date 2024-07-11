<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daducation extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'kejuruan', 'masuk', 'kelulusan'
    ];
}
