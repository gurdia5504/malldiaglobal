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
        Schema::create('wallet_order_lists', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('code')->unique();

            $table->string('seller_name_last name')->nullable();

            // $table->string('Vendor')->nullable();
            //  $table->string('region')->nullable();
            // $table->string('country')->nullable();


            $table->date('date_order')->nullable();
            $table->string('product_name')->nullable();
            $table->bigInteger('product_sku')->nullable();
            $table->string('produt_barecode_type')->nullable();
            $table->bigInteger('product_barecode')->nullable();
            $table->string('region')->nullable();
            $table->string('country')->nullable();
            $table->string('Vendor')->nullable();
            $table->string('seller_name_last_name')->nullable();

            $table->string('siparis_depo_id`')->nullable();
            $table->string('seller_winner')->nullable();

            $table->string('pool_kazanci')->nullable();

            $table->boolean('order_status')->default(0);
            // $table->string('transactions')->nullable();

            $table->foreignId('user_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');

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
        Schema::dropIfExists('wallet_order_lists');
    }
};