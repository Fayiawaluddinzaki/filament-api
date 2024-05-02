<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Smallbanner extends Model
{
    use HasFactory;
    protected $table = 'smallbanners';
    protected $primaryKey = 'id';
    protected $fillable = [
        'small_banners_image',
        'small_banners_url',
        'small_banners_sequence',
        'small_banners_status',
    ];
}
