<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name',20)->unique();
            $table->string('identity',30)->unique();
            $table->integer('status')->default(1);
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
        DB::table('roles')->insert([
            [
                'name' => 'Super Admin',
                'identity' => 'superadmin',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Doctor',
                'identity' => 'doctor',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Receptionist',
                'identity' => 'receptionist',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Accountant',
                'identity' => 'accountant',
                'created_at' => Carbon::now()
            ],
            
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
