<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('loaned_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('item_id')->references('id')->on('items');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('loaned_items');
    }
};
