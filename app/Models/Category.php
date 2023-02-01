<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'img'
    ];
    protected $table = 'categories';

    public function Book()
    {
        return $this->hasMany(Book::class, 'book_id', 'id');
    }
}