<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $primaryKey = 'portfolio_id';

    protected $fillable = [
        'title', 'description', 'image', 'url', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
