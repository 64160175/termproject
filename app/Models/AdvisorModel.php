<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvisorModel extends Model
{
    use HasFactory;
    protected $table="advisor";
    protected $Fillable = [
   'advisor_code','advisor_name','dept_code','office_tel'
    ];
}