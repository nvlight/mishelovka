<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_id')->index()->default(0);
            $table->string('src', 255);
            $table->string('filename', 255);
            $table->string('title', 111)->nullable();
            $table->timestamps();

            // $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('images', function (Blueprint $table) {
            $table->dropIndex(['parent_id']); // очень умно, нужно передать массив строк :smirk
        });

        Schema::dropIfExists('images');
    }
}
