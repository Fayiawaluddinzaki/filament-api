<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tours extends Model
{
    use HasFactory;
    protected $table = 'tours';
    protected $primaryKey = 'id';
    protected $fillable = ['tour_name','tour_type','destination_id','tour_price','tour_duration','tour_description','tour_itinerary','tour_image','status'];

    public function destination()
    {
        return $this->belongsTo(Destinations::class, 'destination_id');
    }
}
