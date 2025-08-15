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
        Schema::create('repairs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('equipment_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->datetime('begin_at')->nullable()->comment('Дата начала ремонта');
            $table->datetime('ended_at')->nullable()->comment('Дата окончания ремонта');
            $table->boolean('is_planned')->default(1)->comment('Запланированный ремонт?');
            $table->boolean('ignore')->default(0)->comment('Игнорировать запись при прогнозировании?');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('repairs');
    }
};
