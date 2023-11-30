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
        Schema::create('user_permissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->boolean('MainModule')->default(0);
            $table->boolean('TrainingModule')->default(0);
            $table->boolean('StartupsModule')->default(0);
            $table->boolean('blogModule')->default(0);
            $table->boolean('fellowshipModule')->default(0);
            $table->boolean('ConsultancyModule')->default(0);

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_permissions');
    }
};
