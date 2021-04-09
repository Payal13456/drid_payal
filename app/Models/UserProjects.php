<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProjects extends Model
{
    use HasFactory;

    protected $table = "user_projects";

    protected $fillable = ['user_id','project_file','project_title','project_description','tools_used','project_url'];

}
