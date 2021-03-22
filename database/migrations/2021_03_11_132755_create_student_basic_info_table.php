<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentBasicInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_basic_info', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('slug');
            $table->string('mobile_no');
            $table->string('mob_privacy')->nullable();
            $table->string('email_privacy')->nullable();
            $table->string('email');
            $table->string('email_2')->nullable();
            $table->string('job_title')->nullable();
            $table->string('password');
            $table->string('rpassword')->nullable();
            $table->string('street_add')->nullable();
            $table->string('street_add_two')->nullable();
            $table->string('state_id')->nullable();
            $table->string('country_id')->nullable();
            $table->string('city_id')->nullable();
            $table->string('pin_code')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('profile_img')->nullable();
            $table->string('cover_img')->nullable();
            $table->string('summary')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('gender')->nullable();
            $table->string('religion')->nullable();
            $table->string('user_type')->nullable();
            $table->string('is_delete')->default(0);
            $table->string('counter')->default(0);
            $table->string('marksheet_pass')->nullable();
            $table->string('forget_verifiy')->nullable();
            $table->string('from_campion')->nullable();
            $table->string('status')->nullable();
            $table->string('github')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('coverletter')->nullable();
            $table->string('prefjobtype')->nullable();
            $table->string('prefroles')->nullable();
            $table->string('prefloc')->nullable();
            $table->string('aboutmevideo')->nullable();
            $table->string('objective')->nullable();
            $table->string('noticeperiod')->nullable();
            $table->string('noticeduration')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_basic_info');
    }
}
