<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutoringRequest extends Model
{
    use HasFactory;
 protected $primaryKey = 'tutoringRequestID' ;
protected $fillable =['name','email','subject','message'];
}
