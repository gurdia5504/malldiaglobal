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
        Schema::create('wallet_seller_money_transfer_lists', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('code')->unique();
            $table->string('seller_name_last name')->nullable();
            $table->string('record_type')->nullable();
            $table->string('Vendor')->nullable();
            $table->string('region')->nullable();
            $table->string('country')->nullable();
            $table->string('tax')->nullable();
            $table->string('communication')->nullable();
            $table->string('email')->nullable();
            $table->string(' money_demand_date')->nullable();
            $table->string('transfer_date_day')->nullable();
            $table->string(' seller_quota')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('iban')->nullable();
            $table->string('doviz_cinsi')->nullable();
            $table->string(' transfer_status')->nullable();
            $table->boolean('transfert_status')->default(0);
            $table->string('transactions')->nullable();

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
        Schema::dropIfExists('wallet_seller_money_transfer_lists');
    }
};