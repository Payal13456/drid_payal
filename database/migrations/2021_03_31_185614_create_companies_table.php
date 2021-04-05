<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name',100);
            $table->text('slug')->nullable();
            $table->string('company_email',100)->nullable();
            $table->string('company_email_2')->nullable();
            $table->string('password');
            $table->string('rpassword',100)->nullable();
            $table->string('company_contact',15)->default('');
            $table->string('company_website',100);
            $table->enum('company_type',['0','1'])->default('0');
            $table->string('com_country')->nullable();
            $table->string('com_state')->nullable();
            $table->string('com_city')->nullable();
            $table->string('company_address')->nullable();
            $table->text('about')->nullable();
            $table->string('user_type',50)->default('company');
            $table->enum('is_delete',['0','1'])->default('0');
            $table->string('company_logo')->nullable();
            $table->enum('is_verify',['0','1'])->default('0');
            $table->enum('status',['0','1'])->default('0');
            $table->string('access_code',5)->nullable();
            $table->enum('counter',['0','1'])->default('0');
            $table->string('forget_verifiy',200)->default('');
            $table->string('post_updated_at',200)->default('');
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
        Schema::dropIfExists('companies');
    }
}
