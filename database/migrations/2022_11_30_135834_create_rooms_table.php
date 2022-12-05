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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('jenis_kamar');
            $table->string ('foto_kamar');
            $table->integer('jumlah_kamar');
            $table->integer('jumlah_guest');
            $table->integer('harga_kamar');
            $table->boolean('air_conditioner')->nullable();
            $table->boolean('teras')->nullable();
            $table->boolean('meja')->nullable();
            $table->boolean('non_smoking')->nullable();
            $table->boolean('walk_in_closet')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
};
