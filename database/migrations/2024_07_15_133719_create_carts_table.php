<?php

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
        Schema::create('carts', function (Blueprint $table) {
            $table->increments('id'); // This creates an unsignedInteger
            $table->unsignedInteger('product_id'); // Match the data type to the categories id
            $table->unsignedBigInteger('user_id'); // Match the data type to the users id

            // Define foreign key constraints
            $table->foreign('product_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('users');
    }
};
