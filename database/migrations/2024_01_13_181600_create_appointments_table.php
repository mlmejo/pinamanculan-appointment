<?php

use App\Models\Service;
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
        Schema::create('appointments', function (Blueprint $table) {
            $table->uuid('id');
            $table->foreignIdFor(Service::class)->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('email');
            $table->string('address');
            $table->date('birth_date');
            $table->string('birth_place');
            $table->enum('civil_status', ['Single', 'Married', 'Widowed']);
            $table->decimal('height');
            $table->decimal('weight');
            $table->enum('gender', ['Male', 'Female']);
            $table->boolean('is_approved')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
