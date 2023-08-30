<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Carbon;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = client::paginate(10);
        return view('clients.index', ['clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $date = Carbon::now()->getTimestampMs();
        $request['code'] = substr($date, -6);

        $attributes = $request->validate([
            'code' => 'required|unique:clients,code',
            'name' => 'required|unique:clients,name',
            'cif' => 'required|unique:clients,cif',
            'address' => 'required|max:100',
            'city' => 'required',
            'town' => 'required',
            'start_contract' => 'required',
            'end_contract' => 'required',
        ]);

        $client = Client::create($attributes);

        return redirect()->route('clients.index')->with('message', 'Cliente creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $client = client::findOrFail($id);
        return view('clients.show', ['client' => $client]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client = Client::findOrFail($id);
        return view('clients.edit', ['client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id);

        $attributes = $request->validate([
            'name' => 'required|unique:clients,name,' . $client->id,
            'cif' => 'required|unique:clients,cif, ' . $client->id,
            'address' => 'required|max:100',
            'city' => 'required',
            'town' => 'required',
            'start_contract' => 'required',
            'end_contract' => 'required',
        ]);

        $client->update($attributes);
        return redirect()->route('clients.index')->with('message', 'Cliente editado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
