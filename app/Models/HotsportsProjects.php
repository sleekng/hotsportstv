<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotsportsProjects extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'author',
        'content',
        'image',
    ];
}
