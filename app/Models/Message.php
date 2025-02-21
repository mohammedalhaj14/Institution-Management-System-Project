<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    // Specify the table name (optional, as Laravel assumes plural 'messages')
    protected $primaryKey = 'messageID';

    // Mass assignable attributes
    protected $fillable = [
        'name',
        'email',
        'message',
    ];

    // If you don't want any mass-assignable fields, you can use $guarded instead
    // protected $guarded = [];
}
