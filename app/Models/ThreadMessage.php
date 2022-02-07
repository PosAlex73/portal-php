<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThreadMessage extends Model
{
    use HasFactory;

    protected $fillable = [
        'thread_id', 'message', 'status'
    ];

    public function thread()
    {
        return $this->belongsTo(Thread::class, 'thread_id', 'id');
    }
}
