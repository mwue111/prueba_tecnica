<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Irrigation extends Model
{
    use HasFactory;

    protected $fillable = [
        'model',
        'serial_number',
        'registration_date',
        'last_connection',
    ];

    public function scopeFilter($query, array $filters){
        if(isset($filters['irrigations'])) {
            // dd(Carbon::now()->subDay()->toDateTimeString());
            $query
                    ->where('last_connection', '>=', Carbon::yesterday()->format('Y-m-d'))
                    ->where('client_id', '=', $filters['client_id']);
        }
    }

    //funciones para relacionarlo con clientes
    public function client() {
        return $this->belongsTo(Client::class);
    }

    //funciones para relacionar con sensores
    public function sensors() {
        return $this->belongsToMany(Sensor::class);
    }
}
