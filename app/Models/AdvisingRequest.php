<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvisingRequest extends Model
{
    use HasFactory;
    protected $primaryKey = 'advisingRequestID';
    protected $fillable = ['fullName', 'email', 'advisor', 'message'];

}
