<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ngo extends Model
{
    use HasFactory;

    protected $table = 'ngos';
    protected $fillable = [
        'name',
        'address',
        'city',
        'district',
        'state',
        'zip_code',
        'country_code',
    ];
}
