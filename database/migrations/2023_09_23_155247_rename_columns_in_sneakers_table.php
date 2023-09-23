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
        Schema::table('sneakers', function (Blueprint $table) {
            $table->renameColumn('taille', 'size');
            $table->renameColumn('prix', 'price');
            $table->renameColumn('categories', 'categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sneakers', function (Blueprint $table) {
            $table->renameColumn('size', 'taille');
            $table->renameColumn('price', 'prix');
            $table->renameColumn('categories', 'categories');
        });
    }
};
