<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    //
    protected $fillable = [
        'notes',
        'bird_count',
    ];
}
