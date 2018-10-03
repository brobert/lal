<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('photo', 100)->default('/image/avatar/avatar7.jpg');
            $table->string('website', 150)->nullable();
            $table->string('bio', 300)->nullable();
            $table->string('city', 50)->default('Kraków');
            $table->unsignedInteger('country_id');
            $table->unsignedInteger('language_id');
            $table->unsignedInteger('timezone_id');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {

        Schema::dropIfExists('users');
    }
}
