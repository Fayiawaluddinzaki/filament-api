<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destinations extends Model
{
    use HasFactory;
    protected $table = 'destinations';
    protected $primaryKey = 'id';
    protected $fillable = [
        'destination_name',
    ];
}
