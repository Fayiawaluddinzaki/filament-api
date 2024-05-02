<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $table = 'banners';
    protected $primaryKey = 'id';
    protected $fillable = [
        'banners_image',
        'banners_url',
        'banners_sequence',
        'banners_status',
    ];
}
