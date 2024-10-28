<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products'; // Pastikan ini sesuai dengan nama tabel Anda

    protected $primaryKey = 'product_id'; // ID kustom

    protected $fillable = [
        'product_name',
        'category_id',
        'product_description',
        'product_price',
        'product_image',
        'url_tiktok',
        'url_shopee',
        'url_tokopedia',
        'is_active',
        'is_deleted',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'categories_id');
    }
    public static function boot()
    {
        parent::boot();

        static::addGlobalScope('orderByName', function ($builder) {
            $builder->orderBy('product_name');
        });
    }
}
