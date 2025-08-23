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
        Schema::table('users', function (Blueprint $table) {
            //
            $table->enum('user_role', ['admin', 'trainer', 'student','user'])->default('user')->after('email_verified_at');
            $table->string('image')->nullable()->after('user_role');
            $table->string('phone')->nullable()->after('image');
            $table->string('address')->nullable()->after('phone');
            $table->string('country')->nullable()->after('address');
            $table->string('city')->nullable()->after('country');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
