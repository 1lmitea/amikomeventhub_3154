<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    // Kolom yang diizinkan untuk diisi form
    protected $fillable = [
        'category_id', 'title', 'description', 'date',
        'location', 'price', 'stock', 'poster_path'
    ];

    // Format tipe data date
    protected $casts = [
        'date' => 'datetime',
    ];

    // Relasi: 1 Event dimiliki oleh 1 Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
