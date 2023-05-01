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
        Schema::create('option_real_estate', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('option_id')->unsigned();
            $table->unsignedBigInteger('real_estate_id')->unsigned();

            $table
                ->foreign('option_id')
                ->references('id')
                ->on('options')
                ->onDelete('cascade');
            $table
                ->foreign('real_estate_id')
                ->references('id')
                ->on('real_estates')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('option_real_estate');
    }
};
