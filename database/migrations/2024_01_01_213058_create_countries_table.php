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
        Schema::create('countries', function (Blueprint $table) {
              $table->id();
            /* $table->engine = 'InnoDB';
            $table->increments('id')->index();
            $table->string('code');
            $table->string('name');
            $table->integer('phonecode'); */
          //  $table->unsignedBigInteger('bolge_id')->nullable();
            $table->unsignedBigInteger('region_id')->nullable();

            $table->string('country_code')->nullable();
            $table->string('country_phone_code')->nullable();
            $table->double('desi_id')->nullable();
            $table->string('ulke_kodu')->nullable();
            $table->string('trisim')->nullable();
            $table->string('engisim')->nullable();
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
        Schema::dropIfExists('countries');
    }
};