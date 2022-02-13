<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGarmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('garments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('age_type'); // foreign
            $table->unsignedBigInteger('age_first')->default(0);
            $table->unsignedBigInteger('age_second')->default(0);
            $table->unsignedBigInteger('country_id');  // foreign
            $table->unsignedBigInteger('brend_id');    // foreign
            $table->string('title', 111);
            $table->string('description');

            $table->foreign('age_type')->references('id')->on('age_periods')->onDelete('CASCADE');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('CASCADE');
            $table->foreign('brend_id')->references('id')->on('brends')->onDelete('CASCADE');
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
        Schema::dropIfExists('garments');
    }
}
