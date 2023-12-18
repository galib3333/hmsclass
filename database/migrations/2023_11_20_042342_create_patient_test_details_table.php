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
        Schema::create('patient_test_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_test_id')->nullable();
            $table->foreign('patient_test_id')->references('id')->on('patient_tests')->onDelete('cascade');
            $table->unsignedBigInteger('inv_list_id')->nullable();
            $table->foreign('inv_list_id')->references('id')->on('invest_lists')->onDelete('cascade');
            $table->decimal('amount',10,2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_test_details');
    }
};
