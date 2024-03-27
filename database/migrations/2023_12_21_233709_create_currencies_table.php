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
        Schema::create('currencies', function (Blueprint $table) {
            $table->id();
           // $table->string('code')->unique();
            $table->string('name')->nullable();
            $table->string('symbol');
            //  $table->bigInteger('quota_price')->nullable();

            $table->string('code')->nullable();
            $table->string('region')->nullable();
            $table->bigInteger('quota_price')->nullable();
            $table->string('currency')->nullable();

            $table->enum('status', ['yes', 'no']);
            //   $table->boolean('valid')->default(false);





            $table->softDeletes();
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
        Schema::dropIfExists('currencies');
    }
};