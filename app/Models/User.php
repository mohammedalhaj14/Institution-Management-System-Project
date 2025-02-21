<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    protected $primaryKey = 'userID';
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['fName', 'lName', 'phone', 'email', 'username', 'password', 'role', 'genderID'];
public function services()
{
    return $this->belongsToMany(Service::class, 'user_services', 'userID', 'serviceID')->withPivot(['name', 'email', 'advisor', 'message']);
}


    /**
     * The attributes that should be hidden for arrays.
     */
    protected $hidden = ['password', 'remember_token'];
}
