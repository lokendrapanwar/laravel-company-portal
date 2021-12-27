<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('title');
            $table->uuid('department_id')->nullable();
            $table->string('location')->nullable();
            $table->integer('experience');
            $table->integer('vacancies');
            $table->integer('age')->nullable();

            $table->string('salary_from')->nullable();
            $table->string('salary_to')->nullable();

            $table->string('job_type');
            $table->integer('status');
            $table->dateTime('start_date')->nullable();
            $table->dateTime('expired_date')->nullable();
            $table->text('description');
            $table->softDeletes();
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
        Schema::dropIfExists('jobs');
    }
}
