<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sensor;
use App\Models\Measure;

class SensorController extends Controller
{
    public function index() {
        $sensors = Sensor::get();
        return $sensors;
    }
}
