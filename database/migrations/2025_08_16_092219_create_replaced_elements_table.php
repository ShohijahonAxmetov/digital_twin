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
        Schema::create('replaced_elements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('repair_id')->nullable()->constrained()->nullOnDelete()->nullOnUpdate();
            $table->foreignId('equipment_id')->nullable()->constrained()->nullOnDelete()->nullOnUpdate();
            $table->foreignId('element_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->decimal('operating_time', 11, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('replaced_elements');
    }
};
