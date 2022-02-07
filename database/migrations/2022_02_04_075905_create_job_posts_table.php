<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->string('company_name');
            $table->text('job_desc');
            $table->date('deadline')->nullable();
            $table->integer('salary')->nullable();
            $table->enum('salary_label', ['Hourly', 'Weekly', 'Monthly', 'Annually'])->nullable();
            $table->enum('job_type', ['Full time', 'Part time', 'Contract']);
            $table->string('address')->nullable();
            $table->string('qualifications');
            $table->integer('experience');
            $table->text('requirements');
            $table->string('benefits')->nullable();
            $table->integer('number_of_hires')->nullable();
            $table->string('schedule');
            $table->string('application_qns')->nullable();
            $table->string('education')->nullable();
            $table->string('work_location');
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
        Schema::dropIfExists('job_posts');
    }
}
