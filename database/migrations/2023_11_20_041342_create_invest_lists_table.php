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
        Schema::create('invest_lists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('inv_cat_id')->nullable();
            $table->foreign('inv_cat_id')->references('id')->on('invest_cats')->onDelete('cascade');
            $table->string('invset_name');
            $table->text('description');
            $table->double('price');
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
        Schema::dropIfExists('invest_lists');
    }
};
