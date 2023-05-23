<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable = [
        "first_name",
        "last_name",
        "fathers_name",
        "mothers_name",
        "gender",
        "date_of_birth",
        "age",
        "email",
        "phone",
        "address",
        "city",
        "district",
        "state",
        "zip_code",
        "country_code",
        "facebook_profile",
        "whatsapp_profile",
        "learning_center_id",
        "learning_center_type",
        "is_still_in_learning_center",
        "enroll_date",
        "graduation_date",
        "institute_name",
        "city_of_institute",
        "class",
        "class_roll",
        "department",
        "session_id"
    ];
}
