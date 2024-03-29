<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventlog extends Model
{
    use HasFactory;
    protected $fillable = [
        'event_id',
        'client_id',
        'promoter_id',
        'like',
        'attend',
        'atEvent',
    ];
}
