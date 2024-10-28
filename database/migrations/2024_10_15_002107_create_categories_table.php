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
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('categories_id'); // Ganti id dengan categories_id
            $table->string('categories_name');
            $table->text('categories_description')->nullable();
            $table->boolean('is_active')->default(true); // Kolom untuk status aktif
            $table->boolean('is_deleted')->default(false); // Kolom untuk status dihapus
            $table->timestamps(); // Menambahkan created_at dan updated_at
            $table->timestamp('created_date')->useCurrent(); // Kolom untuk tanggal dibuat
            $table->string('created_by'); // Kolom untuk menyimpan siapa yang membuat
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
