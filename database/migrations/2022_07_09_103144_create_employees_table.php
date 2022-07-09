<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id(); // id = primary key
            $table->unsignedBigInteger('role_id'); // role_id = id jabatan (Foreign Key Column)
            $table->foreign('role_id')->references('id')->on('roles'); // role_id = id jabatan (Foreign Key Reference)
            $table->string('first_name'); // first_name = nama depan
            $table->string('last_name'); // last_name = nama belakang
            $table->string('email')->unique(); // email = email
            $table->string('phone'); // phone = nomor telepon
            $table->string('address'); // address = alamat
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
        Schema::dropIfExists('employees');
    }
};
