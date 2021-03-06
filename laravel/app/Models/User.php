<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Auth\Authenticatable;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable;
    protected $fillable = ['name', 'email', 'password', 'role'];
    protected $dates = ['created_at', 'updated_at', 'reset_time'];
    
    // Users have user data
    public function data()
    {
        return $this->hasOne('App\Models\UserData');
    }

    // Users can have applications
    public function applications()
    {
        return $this->hasMany('App\Models\Application');
    }

    // Users can judge applications
    public function judged()
    {
        return $this->hasMany('App\Models\Judged');
    }
}
