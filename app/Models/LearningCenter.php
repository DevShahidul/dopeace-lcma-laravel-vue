<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LearningCenter extends Model
{
    use HasFactory;

    protected $table = 'learning_centers';
    protected $fillable = [
        'name',
        'address',
        'city',
        'district',
        'state',
        'zip_code',
        'country_code',
        'ngo_id',
        'type'
    ];

    /**
     *@return BelongsTo
     */
    public function ngo(){
        return $this->belongsTo(Ngo::class, 'ngo_id');
    }

    /**
     * @return HasMany
     */
//    public function students(){
//        return $this->belongsToMany(Student::class);
//    }
}
