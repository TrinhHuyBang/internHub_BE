<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_postings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('business_id');
            $table->foreign('business_id')->references('id')->on('business');
            $table->string('title');
            $table->text('description')->nullable();
            $table->decimal('salary', 10, 1)->nullable();
            $table->integer('recruitment_number');
            $table->string('industry', 50)->nullable();	
            $table->string('field', 50)->nullable();
            $table->integer('internship_duration');
            $table->enum('internship_method', ['online', 'hybrid','offline'])->default('offline');
            $table->enum('internship_type', ['fulltime', 'parttime'])->default('fulltime');
            $table->boolean('is_closed')->default(false);
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
        Schema::dropIfExists('job_postings');
    }
};
