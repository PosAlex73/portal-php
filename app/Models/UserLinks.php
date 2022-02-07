<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLinks extends Model
{
    use HasFactory;

    protected $primaryKey = 'link_id';

    protected $fillable = [
        'title', 'status', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
