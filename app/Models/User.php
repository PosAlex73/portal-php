<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 *
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'type',
        'status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @return mixed
     */
    public function portfolios()
    {
        return $this->hasMany(Portfolio::class);
    }

    /**
     * @return mixed
     */
    public function links()
    {
        return $this->hasMany(UserLinks::class);
    }

    /**
     * @return mixed
     */
    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }

    /**
     * @return mixed
     */
    public function thread()
    {
        return $this->hasOne(Thread::class);
    }

    /**
     * @return mixed
     */
    public function contacts()
    {
        return $this->hasMany(UserContact::class);
    }

    /**
     * @return mixed
     */
    public function profile()
    {
        return $this->hasOne(UserProfile::class);
    }

    /**
     * @return mixed
     */
    public function settings()
    {
        return $this->hasOne(UserSetting::class);
    }
}
