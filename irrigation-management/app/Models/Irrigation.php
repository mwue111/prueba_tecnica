<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Irrigation extends Model
{
    use HasFactory;

    protected $fillable = [
        'model',
        'serial_number',
        'registration_date',
        'last_connection',
    ];

    //función para búsqueda


    //funciones para relacionarlo con clientes
    public function client() {
        return $this->belongsTo(Client::class);
    }

    //funciones para relacionar con sensores
    public function sensors() {
        return $this->belongsToMany(Sensor::class);
    }
}
