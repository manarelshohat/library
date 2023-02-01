<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'category_id',
        'author_id',
        'description',
        'price',
        'status'
    ];
    protected $table = 'books';

    public function Category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }


    public function Author()
    {
        return $this->belongsTo(Author::class, 'author_id', 'id');
    }

    public function Borrowed()
    {
        return $this->hasMany(Borrowed::class, 'borrowed_id', 'id');
    }
}