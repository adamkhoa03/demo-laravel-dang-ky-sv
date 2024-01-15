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
            $table->string('name',255)->nullable(false);
            $table->string('date_of_birth',255)->nullable(false);
            $table->string('gender',255)->nullable(false);
            $table->smallInteger('marriage')->default(0)->nullable(false);
            $table->string('school', 255)->nullable();
            $table->string('cert', 255)->nullable();
            $table->string('avatar', 255)->nullable();
            $table->string('cv', 255)->nullable();
            $table->smallInteger('status')->default(0);
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
