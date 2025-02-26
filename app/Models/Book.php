<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'status',
        'publication_id',
        'category_id',
        'sub_category_id',
        'book_language_id',
        'book_auth_id',
        'country_id',
    ];
}
