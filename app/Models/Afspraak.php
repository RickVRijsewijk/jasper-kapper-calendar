<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Afspraak extends Model
{
    protected $table = 'afspraken';

    protected $fillable = [
        'name', 'email', 'service', 'slot', 'notes',
    ];

    protected $casts = [
        'slot' => 'datetime',
    ];
}
