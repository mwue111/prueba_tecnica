<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Measure;
use App\Models\Irrigation;

class MeasureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $measures = Measure::get();
        return $measures;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $measures = Irrigation::findOrFail($id)->sensors()->where('irrigation_id', '=', $id)->with('measures')->get();
        // dd($sensor);
        //coger de la tabla pivote measures los registros que correspondan a todos los sensores
        return view('measures.show', ['measures' => $measures]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
