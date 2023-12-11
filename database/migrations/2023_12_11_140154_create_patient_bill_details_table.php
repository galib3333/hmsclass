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
        Schema::create('patient_bill_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_bill_id')->nullable();
            $table->foreign('patient_bill_id')->references('id')->on('patient_bills')->onDelete('cascade');
            $table->string('particular');
            $table->decimal('amount', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_bill_details');
    }
};
