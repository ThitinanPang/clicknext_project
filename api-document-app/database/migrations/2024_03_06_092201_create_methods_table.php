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
        Schema::create('methods', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('path');
            $table->unsignedBigInteger('comments_list')->nullable();
            $table->unsignedBigInteger('headers_list')->nullable();
            $table->unsignedBigInteger('parameters_list')->nullable();
            $table->unsignedBigInteger('bodys_list')->nullable();
            $table->unsignedBigInteger('responses_list')->nullable();
            $table->foreign('comments_list')->references('id')->on('comments');
            $table->foreign('headers_list')->references('id')->on('headers');
            $table->foreign('parameters_list')->references('id')->on('parameters');
            $table->foreign('bodys_list')->references('id')->on('bodies');
            $table->foreign('responses_list')->references('id')->on('responses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('methods');
    }
};
