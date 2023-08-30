<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Measure extends Model
{
    use HasFactory;

    protected $fillable = [
        'sensor_name',
        'measurement_date',
        'measurement_value',
    ];

    //relación con sensores (N:N)
    public function sensors() {
        return $this->belongsToMany(Sensor::class);
    }
}
