<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CareerRequest extends Model
{
    protected $primaryKey = 'careerRequestID';
protected $fillable = ['name','email','service','message'];
}
