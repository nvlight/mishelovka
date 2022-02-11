<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgePeriodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('age_periods', function (Blueprint $table) {
            $table->id();
            $table->string('title', 111)->index();
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
        Schema::table('age_perios', function (Blueprint $table) {
            $table->dropIndex(['title']);    // очень умно, нужно передать массив строк :smirk
        });

        Schema::dropIfExists('age_periods');
    }
}
