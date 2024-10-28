<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'categories_id';
    
    protected $fillable = [
        'categories_name',
        'categories_description',
        'is_active',
        'is_deleted',
        'created_date',
        'created_by',
    ];
    
    // Jika Anda ingin memberikan nilai default untuk is_deleted
    protected $attributes = [
        'is_deleted' => false,
    ];

    // Pastikan untuk menambahkan method jika ingin mengubah cara query ke database
    public function scopeActive($query)
    {
        return $query->where('is_deleted', false);
    }
    public static function boot()
    {
        parent::boot();

        static::addGlobalScope('orderByName', function ($builder) {
            $builder->orderBy('categories_name');
        });
    }
}
