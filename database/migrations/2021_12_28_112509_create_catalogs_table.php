<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatecatalogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('type')->index();
            $table->string('img_filename')->nullable();
            $table->string('img')->nullable();
            $table->string('caption')->index();
            $table->string('color',7)->nullable();
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
        Schema::table('catalogs', function (Blueprint $table) {
            $table->dropIndex(['type']);    // очень умно, нужно передать массив строк :smirk
            $table->dropIndex(['caption']); // очень умно, нужно передать массив строк :smirk
        });
        Schema::dropIfExists('catalogs');
    }
}
