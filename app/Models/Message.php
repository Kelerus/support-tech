<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'ticket',
        'user',
        'message',
        'files',
    ];

    protected $casts = [
        'files' => 'array',
    ];
}
