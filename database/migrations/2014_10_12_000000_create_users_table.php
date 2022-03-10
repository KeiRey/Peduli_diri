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
            $table->bigIncrements('id');
            $table->string('nik')->nullable();
            $table->string('name');
            $table->text('alamat')->nullable();
            $table->string('no_telp',50)->nullable();
            $table->string('gambar',100)->nullable();
            $table->string('indoregion_provinces_id', 50)->nullable()->references('id')->on('indoregion_provinces');
            $table->string('indoregion_regencies_id', 50)->nullable()->references('id')->on('indoregion_regencies');
            $table->string('indoregion_districts_id', 50)->nullable()->references('id')->on('indoregion_districts');
            $table->string('indoregion_villages_id', 50)->nullable()->references('id')->on('indoregion_villages');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
