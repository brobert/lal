<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateGeoIpCountriesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('geo_ip_countries', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('country_code', 2);
            $table->string('country', 100);
            $table->string('continent_code', 2);
            $table->string('continent', 50);
            $table->string('default_currency', 3)->default('')->nullable();
            $table->smallInteger('default_time_zoneid')->default(0)->nullable();
            $table->timestamps();
            $table->unique([
                'country_code',
                'continent_code'
            ], 'uidx_country_continent');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {

        Schema::dropIfExists('geo_ip_countries');
    }
}
