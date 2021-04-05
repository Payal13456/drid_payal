<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfessionalExperience extends Model
{
    use HasFactory;
    protected $table = "professional_experiences";

    protected $fillable = ['company_profile','company_name','start_date','end_date','is_working','responsibility','designation','user_id'];
}
