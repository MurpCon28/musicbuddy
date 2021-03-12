<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavouritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favourites', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('favourite');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('upload_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            // $table->foreign('upload_id')->references('id')->on('uploads');
            $table->foreign('upload_id')->references('id')->on('uploads')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favourites');
    }
}
