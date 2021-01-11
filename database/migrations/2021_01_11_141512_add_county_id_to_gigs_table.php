<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCountyIdToGigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gigs', function (Blueprint $table) {
          $table->dropColumn('county');
          $table->unsignedBigInteger('county_id');

          $table->foreign('county_id')->references('id')->on('counties')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gigs', function (Blueprint $table) {
          $table->dropForeign(['county_id']);
          $table->dropColumn('county_id');
          $table->string('county');
        });
    }
}
