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
        Schema::disableForeignKeyConstraints();

        Schema::create('letter_logs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('common_letter_log_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('field_name');
            $table->text('field_value')->nullable();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('letter_logs');
    }
};
