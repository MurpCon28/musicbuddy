<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTagIdToUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('uploads', function (Blueprint $table) {
          $table->dropColumn('tag');
          $table->unsignedBigInteger('tag_id');

          $table->foreign('tag_id')->references('id')->on('tags')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('uploads', function (Blueprint $table) {
          $table->dropForeign(['tag_id']);
          $table->dropColumn('tag_id');
          $table->string('tag');
        });
    }
}
