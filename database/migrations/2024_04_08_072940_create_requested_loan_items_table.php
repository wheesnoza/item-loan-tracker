<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('requested_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('item_id')->references('id')->on('items');
            $table->foreignId('request_id')->references('id')->on('requests');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('requested_loan_items');
    }
};
