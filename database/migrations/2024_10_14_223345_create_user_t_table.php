<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('user_t', function (Blueprint $table) {
            $table->id(); // Menghasilkan kolom 'id' sebagai primary key
            $table->string('username')->unique(); // Kolom username yang harus unik
            $table->string('password'); // Kolom password
            $table->boolean('is_active')->default(true); // Kolom untuk status aktif
            $table->boolean('is_deleted')->default(false); // Kolom untuk status dihapus
            $table->timestamp('created_date')->useCurrent(); // Kolom untuk tanggal dibuat
            $table->string('created_by'); // Kolom untuk menyimpan siapa yang membuat
            
            $table->timestamps(); // Menambahkan kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_t');
    }
};
