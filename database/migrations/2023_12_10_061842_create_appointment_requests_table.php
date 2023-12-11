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
        Schema::create('appointment_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('departments');
            $table->unsignedBigInteger('doctor_id')->unsigned();
            $table->foreign('doctor_id')->references('id')->on('employ_basics');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->text('details');
            $table->date('appdate');
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment_requests');
    }
};
