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
        Schema::create('_data_perusahaan', function (Blueprint $table) {
            $table->id();
            $table->string('namaperusahaan');
            $table->string('shortdeskripsi');
            $table->string('deskripsi');
            $table->integer('clients');
            $table->integer('products');
            $table->integer('workers');
            $table->integer('office');
            $table->string('visi');
            $table->string('misi');
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
        Schema::dropIfExists('_data_perusahaan');
    }
};
