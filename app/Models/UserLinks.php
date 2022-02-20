<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLinks extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'status', 'user_id', 'url'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
