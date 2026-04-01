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
        Schema::create('return', function (Blueprint $table) {
               $table->integer('id')->primary();
            $table->integer('loan_detail_id')->unsigned();
            $table->foreign('loan_detail_id')->references('id')->on('loan_detail');
            $table->boolean('charge')->default(false);
            $table->integer('amount')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('return');
    }
};
