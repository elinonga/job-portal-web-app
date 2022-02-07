<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class JobPost extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'company_name',
        'job_desc',
        'deadline',
        'salary',
        'salary_label',
        'job_type',
        'address',
        'qualifications',
        'experience',
        'requirements',
        'benefits',
        'number_of_hires',
        'schedule',
        'application_qns',
        'education',
        'work_location'

    ];

    public function user() {
        return $this->belongsTo(User::class);
    }


}
