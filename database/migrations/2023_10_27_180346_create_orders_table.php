<?php

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(User::class);
            // total price
            $table->string('cost')->default('0');
            $table->string('status')->default('in proccess');
            $table->string('payment_method')->default(null);
            $table->string('payment_status')->default('in proccess');
            $table->string('delivery_address')->default(null);
            $table->string('delivery_phone')->default('+998');            

            $table->timestamps();
        });

        Schema::create('orders_carts', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Order::class)
            ->constrained()
            ->cascadeOnUpdate()
            ->cascadeOnDelete();
            $table->foreignIdFor(Cart::class)
            ->constrained()
            ->cascadeOnUpdate()
            ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
