<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Irrigation;
use App\Models\Client;

class IrrigationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $irrigations = Irrigation::get();
        return $irrigations;
    }

    public function active($id){
        $client = Client::findOrFail($id);
        $allIrrigations = $client->irrigations;

        $irrigations = Irrigation::filter([
            'irrigations' => $allIrrigations->toArray(),
            'client_id' => $client->id
            ])->paginate(10);

        return view('irrigations.index', [
            'irrigations' => $irrigations,
            'client' => $client
        ]);
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
    public function show(string $id)
    {
        //
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
