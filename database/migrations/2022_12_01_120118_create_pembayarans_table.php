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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('transaksi_id');
            $table->foreignId('transaksi_total_pembayaran');
            $table->timestamp('tgl_pembayaran')->nullable();
            $table->string('metode_pembayaran')->nullable();
            $table->boolean('status');                    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayarans');
    }
};
