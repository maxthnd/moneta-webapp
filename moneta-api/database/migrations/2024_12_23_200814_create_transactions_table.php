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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreign("plan_id");
            $table->string("name")->unique();
            $table->string("type");
            $table->float("amount");
            $table->dateTime("updated_at")->nullable();
            $table->dateTime("created_at")->nullable();
            $table->string("category");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
