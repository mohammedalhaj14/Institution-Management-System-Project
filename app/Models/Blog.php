<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $primaryKey = 'blogID';
    protected $fillable = ['title', 'publishedDate', 'details'];
}
