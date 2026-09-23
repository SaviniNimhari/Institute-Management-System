<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('teacher_subjects')->nullable();
            $table->string('teacher_qualification')->nullable();
            $table->unsignedSmallInteger('teacher_experience')->nullable();
            $table->string('teacher_phone')->nullable();
            $table->text('teacher_bio')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'teacher_subjects',
                'teacher_qualification',
                'teacher_experience',
                'teacher_phone',
                'teacher_bio',
            ]);
        });
    }
};
