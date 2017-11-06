<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /** This file is a model
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password',
        'first_name',
        'middle_name',
        'last_name',
        'state',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 
        'remember_token',
    ];

    public function tasks(){
        return $this->hasMany('App\Models\Task');
    }

    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }

    public function role(){
        return $this->belongsTo('App\Models\Role');
    }

    public function companies(){
        return $this->hasMany('App\Models\Company');
    }
}
