<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_id')->index()->default(0);
            $table->string('src', 255);
            $table->string('filename', 255);
            $table->string('title', 111)->nullable();
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
        Schema::table('videos', function (Blueprint $table) {
            $table->dropIndex(['parent_id']); // очень умно, нужно передать массив строк :smirk
        });

        Schema::dropIfExists('videos');
    }
}
