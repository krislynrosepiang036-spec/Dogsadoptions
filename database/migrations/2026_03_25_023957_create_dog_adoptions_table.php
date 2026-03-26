<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dog_adoptions', function (Blueprint $table) {
            $table->id();
            $table->string('dog_name');
            $table->string('user_name');
            $table->string('email');
            $table->string('phone');
            $table->text('reason');
            $table->string('status')->default('Pending');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dog_adoptions');
    }
};