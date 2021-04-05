<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Company extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $table = "student_basic_info";

    protected $fillable = ['id', 'company_name', 'slug', 'company_email', 'company_email_2', 'password', 'rpassword', 'company_contact', 'company_website', 'company_type', 'com_country', 'com_state', 'com_city', 'company_address', 'about', 'user_type', 'is_delete', 'company_logo', 'is_verify', 'status', 'access_code', 'counter', 'forget_verifiy', 'post_updated_at', 'created_at'];
}
