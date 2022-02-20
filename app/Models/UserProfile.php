<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone', 'address', 'lang', 'skills', 'about'
    ];

    protected $attributes = [
        'phone' => '',
        'address' => '',
        'lang' => '',
        'skills' => '',
        'about' => ''
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
