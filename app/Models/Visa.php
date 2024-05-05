<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visa extends Model
{
    use HasFactory;
    protected $table = 'visas';
    protected $fillable = [
        'visa_name',
        'visa_type',
        'visa_expiry_date',
        'visa_price',
        'visa_description',
        'publish_status',
    ];
}
