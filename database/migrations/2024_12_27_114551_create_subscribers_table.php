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
        Schema::create('user_user', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->bigInteger('subscribe_id')->unsigned(); // Foreign key to the subscriptions table
            $table->bigInteger('subscriber_id')->unsigned(); // Foreign key to the subscribers table
            $table->timestamps();

             // Foreign key constraints
             $table->foreign('subscribe_id')->references('id')->on('subscriptions')->onDelete('cascade');
             $table->foreign('subscriber_id')->references('id')->on('subscribers')->onDelete('cascade');
          
            // Optionally, ensure the pair of subscribe_id and subscriber_id is unique
            $table->unique(['subscribe_id', 'subscriber_id']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_user');
    }
};
