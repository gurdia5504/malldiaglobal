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
        Schema::create('wallet_costsheets', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('code')->unique();

            $table->boolean('period_status')->default(0);
            $table->date('car_period')->nullable();
            $table->date('date_order')->nullable();
            $table->string('product_name')->nullable();
            $table->bigInteger('product_sku')->nullable();
            $table->string('product_bare_code_type')->nullable();
            $table->bigInteger('product_bare_code')->nullable();
            $table->string('region')->nullable();
            $table->string('country')->nullable();
            $table->string('Vendor')->nullable();
            $table->string('seller_name_last_name')->nullable();
            $table->bigInteger('doviz_cinsi')->nullable();
            $table->bigInteger('total_sales_price')->nullable();
            $table->bigInteger('product_cost')->nullable();
            $table->bigInteger('product_cost_tax_rate')->nullable();
            $table->bigInteger('product_cost_tax')->nullable();
            $table->bigInteger('product_cost_+_tax')->nullable();
            $table->bigInteger('product_saller_price')->nullable();
            $table->bigInteger('cargo_fee')->nullable();
            $table->bigInteger('cargo_vergi_orani')->nullable();
            $table->bigInteger('cargo_tax')->nullable();
            $table->bigInteger('cargo_fee_+_tax')->nullable();
            $table->bigInteger('product_karari_+_tax')->nullable();
            $table->bigInteger('product_tax')->nullable();
            $table->bigInteger('net_satis_kari')->nullable();
            $table->bigInteger('transfert_tax_rate')->nullable();
            $table->bigInteger('transfert_fee')->nullable();
            $table->bigInteger('company_pay')->nullable();
            $table->bigInteger('company_odenen')->nullable();
            $table->bigInteger('pool_pay')->nullable();
            $table->string('pool_odenen')->nullable();
            $table->string('wallet_seller_kari')->nullable();
            $table->bigInteger('wallet_seller_pay')->nullable();
            $table->boolean('return_status')->default(0);
            $table->timestamps();


            $table->foreignId('user_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wallet_costsheets');
    }
};