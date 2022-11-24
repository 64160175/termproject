<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    use HasFactory;
    protected $table="student";
    protected $Fillable = [
   'student_code','student_name','dept_code','gpa','advisor_code'
    ];
}