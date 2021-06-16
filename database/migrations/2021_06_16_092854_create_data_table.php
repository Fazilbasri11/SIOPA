<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->string('nim', 20);
            $table->string('nama', 50);
            $table->string('Jurusan', 20);
            $table->string('ttl', 50);
            $table->string('alamat', 1000);
            $table->string('orpil', 20);
            $table->string('alasan', 1000);
            $table->string('statusform', 15);
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
        Schema::dropIfExists('data');
    }
}
