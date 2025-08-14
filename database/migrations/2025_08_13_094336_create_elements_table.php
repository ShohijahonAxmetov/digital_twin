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
        Schema::create('elements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('equipment_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('refusal_nature_id')->nullable()->constrained()->nullOnDelete()->nullOnUpdate();
            $table->foreignId('parent_id')->nullable()->constrained('elements')->onDelete('cascade')->onUpdate('cascade');
            $table->text('name');
            $table->datetime('installed_at')->comment('Дата установки');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('elements');
    }
};
