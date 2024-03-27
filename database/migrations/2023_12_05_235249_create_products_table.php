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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('code')->nullable();

            $table->string('product_name')->unique();
            $table->bigInteger('product_sku')->nullable();
            $table->string('produt_barecode_type')->nullable();
            $table->bigInteger('product_barecode')->nullable();
            $table->longText('description')->nullable();
            $table->string('color')->nullable();
            $table->bigInteger('price')->nullable();
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
        Schema::dropIfExists('products');
    }
};