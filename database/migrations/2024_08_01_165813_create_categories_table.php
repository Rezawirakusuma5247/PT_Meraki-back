<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::table('pelatihans', function (Blueprint $table) {
            $table->foreignId('category_id')->nullable()->constrained()->onDelete('cascade');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('categories');

        Schema::table('pelatihans', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
        });
    }
};

