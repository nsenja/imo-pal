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
        Schema::create('imos', function (Blueprint $table) {
            $table->id();
            $table->string('id_barang');
            $table->string('no_part');
            $table->string('desc');
            $table->string('asal_kirim');
            $table->string('ekspedisi');
            $table->string('status_kirim')->comment('1 = on the way, 2 = success');
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
        Schema::dropIfExists('imo');
    }
};
