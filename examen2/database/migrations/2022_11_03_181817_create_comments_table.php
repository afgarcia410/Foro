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
        Schema::create('comment', function (Blueprint $table) {
            $table->id();
            $table->string('mensaje',100);
            $table->string('idpost',50);
            $table->string('idusuario',50);
            $table->timestamps();
            $table->foreign('idpost')->references('idpost')->on('post')->onDelete('cascade');
            $table->foreign('idusuario')->references('idusuario')->on('usuario')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment');
    }
};
