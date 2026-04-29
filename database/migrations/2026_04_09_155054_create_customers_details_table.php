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
        Schema::create('customers_details', function (Blueprint $table) {
            $table->id();

            // foreign key (one-to-one)
            $table->unsignedBigInteger('customer_id')->unique();

            $table->string('address')->nullable();
            $table->date('dob')->format('Y-m-d')->nullable();

            $table->timestamps();

            // relation with customers table
            $table->foreign('customer_id')
                  ->references('id')
                  ->on('customers')
                  ->onDelete('cascade');
        });




    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers_details');
    }
};
