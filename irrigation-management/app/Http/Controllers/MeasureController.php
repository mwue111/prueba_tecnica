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
        $model = Irrigation::findOrFail($id)->model;
        $client = Irrigation::findOrFail($id)->client;

        $measures = Irrigation::findOrFail($id)
                    ->sensors()
                    // ->where('irrigation_id', '=', $id)
                    // ->with('measures')
                    ->paginate(2);
                    // ->get();

        // $measures = [];
        // foreach($sensors as $sensor){
        //     foreach($sensor->measures as $measure)
        //     $measures[] = $measure;
        // }

        // dd($measures);

        return view('measures.show', [
            'measures' => $measures,
            'model' => $model,
            'client' => $client
        ]);

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
