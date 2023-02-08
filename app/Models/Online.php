<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Online extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'description',
        'author_name',
        'category_name'
    ];
    protected $table = 'online';

    public function Book()
    {
        return $this->hasMany(Book::class, 'book_id', 'id');
    }
}
