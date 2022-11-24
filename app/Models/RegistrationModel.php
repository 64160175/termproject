<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationModel extends Model
{
    use HasFactory;
    protected $table="registration";
    protected $Fillable = [
   'student_code','course_code','section','grade','semester'
    ];
}