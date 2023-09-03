<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Irrigation;
use Illuminate\Support\Facades\Session;

class SearchController extends Controller
{
    public function search(Request $request) {
        $clients = Client::latest()
                    ->filter(request(['search']))
                    ->paginate(10);

        if(!$clients->count()){
            $clients = null;
        }

        return view('clients.found', ['clients' => $clients]);
    }

    public function searchIrrigation(Request $request) {
        $clientId = $request->input('client_id');
        $client = Client::findOrFail($clientId)->first();
        $searchModel = $request->input('search');

        if($request->input('search') !== 'a' || $request->input('search') !== 'b' || $request->input('search') !== 'c' ){
            $modelExists = false;
        }

        $irrigations = Client::findOrFail($clientId)
                        ->irrigations()
                        ->where('model', 'LIKE', '%' . $searchModel . '%')
                        ->get();

        if(!$irrigations->count()){
            $irrigations = null;
        }

        return view('irrigations.found', ['irrigations' => $irrigations, 'client' => $client, 'model' => $searchModel, 'model_exists' => $modelExists]);
    }

}
