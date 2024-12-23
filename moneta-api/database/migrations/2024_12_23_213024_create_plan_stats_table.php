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
        Schema::create('plan_stats', function (Blueprint $table) {
            $table->id();
            $table->foreign("plan_id");
            $table->float("costs");
            $table->float("income");
            $table->string("type");
            $table->dateTime("updated_at")->nullable();
            $table->dateTime("created_at")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plan_stats');
    }
};
