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
            $table->integer('customer_id');
            $table->string('org_name');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('department')->nullable();
            $table->string('number');
            $table->string('address')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('is_admin')->default(0);

            $table->string('password');
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
