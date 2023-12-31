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
            $table->id();
            $table->unsignedBigInteger('employ_id')->nullable();
            $table->foreign('employ_id')->references('id')->on('employ_basics')->onDelete('cascade');
            $table->unsignedBigInteger('role_id')->index()->nullable();
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->string('name_en')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('contact_no_en')->unique()->nullable();
            $table->string('password');
            $table->string('language')->default('en');
            $table->boolean('full_access')->default(false)->comment('1=yes, 0=no');
            $table->boolean('status')->default(1)->comment('1 = active, 2 = inactive');
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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
