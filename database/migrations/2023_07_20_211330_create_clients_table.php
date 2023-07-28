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
        Schema::create('clients', function (Blueprint $table) {
            $table->string('id')->nullable();
            $table->timestamps();
            $table->boolean('is_active')->nullable();
            $table->string('gender');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('date_of_birth')->nullable();
            $table->string('email')->nullable();
            $table->json('phones')->nullable();
            $table->string('address')->nullable();
            $table->string('subscription_id')->nullable();
            $table->string('expiration_date')->nullable();
            $table->double('balance')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
