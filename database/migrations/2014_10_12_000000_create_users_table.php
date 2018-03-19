<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateUsersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')
                ->unique();
            $table->string('password');
            $table->string('photo', 100)
                ->default('/image/avatar/avatar7.jpg');
            $table->string('country', 50)
                ->default('pl');
            $table->string('location', 50)
                ->default('Kraków');
            $table->string('website', 150)
                ->nullable();
            $table->string('bio', 160)
                ->default('');
            $table->string('language', 50)
                ->default('pl');
            $table->string('tz', 50)
                ->default('europe/warsaw');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
