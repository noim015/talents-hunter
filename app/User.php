<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'profile_pic', 'age', 'current_city', 'current_address','current_postcode', 'permanent_address','permanent_city', 'permanent_postcode','ssc_gpa','school_name','ssc_p_year','ssc_group', 'hsc_gpa','college_name','hsc_p_year','hsc_group', 'bsc_gpa', 'bsc_passing_year', 'university_name','bsc_subject', 'job_experience', 'skill','about', 'banner', 'date_of_birth', 'place_of_birth' , 'gender', 'marital_status', 'blood_group', 'religion', 'nationality', 'father_name','father_mob','mother_name','mother_mob','mobile', 'additional_mob', 'interest', 'facebook','twitter','linkedin','availability',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
