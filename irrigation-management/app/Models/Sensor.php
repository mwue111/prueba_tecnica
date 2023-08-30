<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    //relaciones con PR (N:N)
    public function irrigations() {
       return $this->belongsToMany(Irrigation::class);
    }

    //relaciones con medidas (N:N)
    public function measures() {
        return $this->belongsToMany(Measure::class);
    }
}
