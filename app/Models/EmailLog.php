<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EmailLog extends Model
{
    
    use HasFactory;

    protected $fillable = [
        'recipient_email',
        'subject',
        'body',
        'status',
        'error_message',
    ];
}
