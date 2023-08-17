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
        Schema::create('blood_takes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('blood_type_id');
            $table->foreign('blood_type_id')->references('id')->on('blood_types');
            $table->string('recipient_name');
            $table->string('recom_letter');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blood_takes');
    }
};
