<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BursaryApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'email',
        'phone_number',
        'date_of_birth',
        'highest_education',
        'institution_name',
        'course',
        'year_of_study',
        'financial_need',
        'family_income',
        'other_scholarships',
        'scholarship_amount',
        'extracurricular_activities',
        'career_goals',
        'volunteer_work',
        'references',
    ];
}
