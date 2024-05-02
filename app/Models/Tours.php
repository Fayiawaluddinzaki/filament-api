<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tours extends Model
{
    use HasFactory;
    protected $table = 'tours';
    protected $primaryKey = 'id';
    protected $fillable = [
        'tour_name',
        'tour_type',
        'tour_price',
        'tour_duration',
        'tour_description',
        'tour_itinerary',
        'tour_image',
        'status',
        // 'date',
    ];
}
