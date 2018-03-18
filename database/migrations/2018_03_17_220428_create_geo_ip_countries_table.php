<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeoIpCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geo_ip_countries', function (Blueprint $table) {
        	$table->smallIncrements('id');
            $table->string('country_code', 2)->unique();
            $table->string('country', 100)->unique();
            $table->string('continent_code',2);
            $table->string('continent',50);
            $table->string('default_currency', 3);
            $table->smallInteger('default_time_zoneid');
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
        Schema::dropIfExists('geo_ip_countries');
    }
}
