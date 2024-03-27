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
        Schema::create('dovizlers', function (Blueprint $table) {
            $table->id();

            $table->string('tarih')->nullable();
            $table->integer('dovizid')->nullable();
            $table->string('dovizkod')->nullable();


            $table->string('dovizaditr')->nullable();


            $table->string('dovizadieng')->nullable();

            $table->double('alisdegeritl')->nullable();
            $table->double('satisdegeritl')->nullable();
            $table->boolean('aktif')->default(0);

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
        Schema::dropIfExists('dovizlers');
    }
};