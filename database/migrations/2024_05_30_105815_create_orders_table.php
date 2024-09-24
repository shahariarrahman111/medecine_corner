<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('order_number', 50)->unique();
            $table->foreignId('address_id')->constrained('addresses')->onDelete('cascade');
            $table->decimal('total_price', 8, 2);
            $table->string('payment_method');
            $table->string('status')->default('Pending');
            $table->string('payment_status')->default('pending_payment'); // This line is already included
            $table->string('transaction_id')->nullable();
            $table->string('currency')->default('BDT');
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
        Schema::dropIfExists('orders');
    }
}
