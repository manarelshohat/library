<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrowed extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'book_id',
        'register_id',
        'issue_date',
        'return_date'
    ];
    protected $table = 'borrowed';

    public function Register()
    {
        return $this->belongsTo(Register::class, 'register_id', 'id');
    }

    public function Book()
    {
        return $this->belongsTo(Book::class, 'book_id', 'id');
    }
}