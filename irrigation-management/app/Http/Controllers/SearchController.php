<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Session;

class SearchController extends Controller
{
    public function search(Request $request) {
        $clients = Client::latest()->filter(request(['search']))->paginate(10);

        if(!$clients->count()){
            $clients = null;
        }

        return view('clients.found', ['clients' => $clients]);
    }


}
