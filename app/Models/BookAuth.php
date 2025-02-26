<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookAuth extends Model
{
    protected $fillable = [
        'book_id',
        'description',
    ];
}
