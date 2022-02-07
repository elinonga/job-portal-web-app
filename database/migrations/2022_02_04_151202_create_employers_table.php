<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone');
            $table->string('company_name');
            $table->enum('number_of_employees', ['1 to 49', '40 to 149', '150 to 249', '250 to 499', '500 to 749', '750 to 999', '1000+']);
            $table->enum('hiring_role', ['Owner / CEO', 'Recruiter or Talent Acquisition', 'Assistant or Office Manager', 'Human Resources Generalist', 'Hiring Manager', 'Other']);
            $table->enum('hiring_budget', ['I have a budget for my roles(s)', 'No planned budget but I can spend if needed', 'Not able to spend on hiring']);
            $table->string('profile_photo_path', 1024)->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('employers');
    }
}
