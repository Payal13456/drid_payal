<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessionalExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professional_experiences', function (Blueprint $table) {
            $table->id();
            $table->string('company_profile')->nullable();
            $table->string('company_name');
            $table->string('designation');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->integer('is_working')->default(0);
            $table->integer('user_id');
            $table->text('responsibility')->nullable();
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
        Schema::dropIfExists('professional_experiences');
    }
}
