<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('type')->comment('0: internship, 1: certificate')->default(1)->nullable();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->string('image')->nullable();
            $table->bigInteger('company_id')->unsigned()->nullable();
            $table->string('fee')->nullable();
            $table->string('trainer')->nullable();
            $table->string('seats')->nullable();
            $table->string('enrolled')->nullable();
            $table->string('favourites')->nullable();
            $table->string('schedule')->nullable();
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('publishstatus')->default(0)->comment('0: unpublished, 1: published')->nullable();
            $table->string('other2')->nullable();
            $table->tinyInteger('status')->default(1)->comment('1=active, 0=inactive');
            $table->bigInteger('created_by')->unsigned()->nullable();
            $table->bigInteger('updated_by')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::table('courses', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::table('courses', function (Blueprint $table) {
            // Remove foreign key constraints
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
        });

        Schema::dropIfExists('courses');
    }
};


