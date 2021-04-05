<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class familyInfo extends Model
{
    use HasFactory;

    protected $table = "family_infos";

    protected $fillable = ['mother_name','father_name','father_occupation','mother_occupation','address','state','city','country','student_id'];
}
