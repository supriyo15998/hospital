<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'city_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function beds()
    {
        return $this->hasMany(Bed::class);
    }
    public function departments()
    {
        return $this->hasMany(Department::class);
    }
    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }
    public function laboratories()
    {
        return $this->hasMany(Laboratory::class);
    }
    public function emergencies()
    {
        return $this->hasMany(Emergency::class);
    }
    public function helpdesk()
    {
        return $this->hasMany(HelpDesk::class);
    }
}
