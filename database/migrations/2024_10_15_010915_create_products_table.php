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
        Schema::create('products', function (Blueprint $table) {
            $table->id('product_id'); // ID produk menggunakan product_id
            $table->string('product_name'); // Nama produk
            $table->foreignId('category_id')->constrained('categories', 'categories_id'); // ID kategori
            $table->text('product_description')->nullable(); // Deskripsi produk
            $table->decimal('product_price', 10, 2); // Harga produk
            $table->string('product_image')->nullable(); // Gambar produk
            $table->string('url_tiktok')->nullable(); // URL TikTok
            $table->string('url_shopee')->nullable(); // URL Shopee
            $table->string('url_tokopedia')->nullable(); // URL Tokopedia
            $table->boolean('is_active')->default(true); // Status aktif
            $table->boolean('is_deleted')->default(false); // Status dihapus
            $table->timestamps(); // Timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
