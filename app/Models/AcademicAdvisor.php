<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicAdvisor extends Model
{
    use HasFactory;
    protected $primaryKey = 'academicAdvisorID';
    protected $fillable = ['advisorName', 'serviceID', 'advisorMajor'];
    public function service()
    {
        return $this->belongsTo(Service::class, 'serviceID');
    }
}
