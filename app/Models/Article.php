<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $table = 'articles';
    protected $primaryKey = 'id';
    protected $fillable = [
        'article_title',
        'article_image',
        'article_content',
        'article_tag',
        'author_name',
        // 'author_image',
        // 'author_status',
    ];
}
