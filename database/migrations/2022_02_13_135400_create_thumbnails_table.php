<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThumbnailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thumbnails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('garment_id'); // foreign
            $table->unsignedBigInteger('img_id');     // foreign
            $table->timestamps();

            // todo
            // если удалить одежду, удалятся все записи взаимосвязи в этой таблице,
            // а удаляться ли они дальше в таблице images?
            $table->foreign('img_id')->references('id')->on('images')->onDelete('CASCADE');
            $table->foreign('garment_id')->references('id')->on('garments')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thumbnails');
    }
}
