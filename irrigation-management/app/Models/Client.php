<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'code',
        'name',
        'cif',
        'address',
        'city',
        'town',
        'start_contract',
        'end_contract',
    ];

    //función para búsqueda
    public function scopeFilter($query, array $filters) {
        // dd($query);
        if(isset($filters['search'])) {
            $query
                    ->where('name', 'LIKE', '%' . $filters['search'] . '%')
                    ->orWhere('city', 'LIKE', '%' . $filters['search'] . '%');
        }
    }

    //funciones relacionadas con PR
    public function irrigations() {
        return $this->hasMany(Irrigation::class);
    }
}
