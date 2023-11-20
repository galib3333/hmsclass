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
        Schema::create('patient_prescribe_medi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('prescribe_id');
            $table->foreign('prescribe_id')->references('id')->on('patient_prescribe')->onDelete('cascade');
            $table->unsignedBigInteger('medicine_cat_id');
            $table->foreign('medicine_cat_id')->references('id')->on('patient_medi_cat')->onDelete('cascade');
            $table->string('_name');
            $table->string('dose');
            $table->integer('status')->default(1);
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_prescribe_medi');
    }
};
