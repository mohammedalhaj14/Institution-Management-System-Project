<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $primaryKey = 'serviceID';
    protected $fillable = ['serviceName'];
public function users()
{
    return $this->belongsToMany(User::class, 'user_services', 'serviceID', 'userID')
        ->withTimestamps()
        ->withPivot(['name', 'email', 'advisor', 'message']);
}


}
