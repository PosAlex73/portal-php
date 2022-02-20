<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'text', 'image', 'status', 'created', 'updated'
    ];

    public function getShortDescriptionAttribute()
    {
        return substr($this->text, 20, 50);
    }
}
