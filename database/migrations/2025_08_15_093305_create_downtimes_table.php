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
        Schema::create('downtimes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('equipment_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('downtime_reason_id')->nullable()->constrained()->nullOnUpdate()->nullOnDelete();
            $table->datetime('begin_at')->nullable()->comment('Дата начала простоя');
            $table->datetime('ended_at')->nullable()->comment('Дата окончания простоя');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('downtimes');
    }
};
