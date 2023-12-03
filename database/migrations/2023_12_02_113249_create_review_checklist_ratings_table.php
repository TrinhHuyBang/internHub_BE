<?php

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
        Schema::create('review_checklist_ratings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('review_id');
            $table->foreign('review_id')->references('id')->on('reviews');
            $table->string('criteria_name', 100);
            $table->integer('rating');
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
        Schema::dropIfExists('review_checklist_ratings');
    }
};
