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
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('email')->unique();
            $table->text('web_url')->nullable();
            $table->string('street', 50)->nullable(); // nama jalan
            $table->foreignId('urban_village_id')->nullable()->constrained()->cascadeOnUpdate()->cascadeOnDelete(); // kelurahan
            $table->foreignId('district_id')->nullable()->constrained()->cascadeOnUpdate()->cascadeOnDelete(); // kecamatan
            $table->foreignId('region_id')->nullable()->constrained()->cascadeOnUpdate()->cascadeOnDelete(); // kota/kabupaten
            $table->foreignId('province_id')->nullable()->constrained()->cascadeOnUpdate()->cascadeOnDelete(); // provinsi
            $table->string('phone_number')->nullable();
            $table->string('postal_code')->nullable();
            $table->text('logo_url')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean("active")->default(true);
            $table->boolean("completed")->default(false);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
