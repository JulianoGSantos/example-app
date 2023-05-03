<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Models\Client;


class ClientController extends Controller
{
    public function teste(){
        return view('boots');
    }

    public function start(){
        return view('inicio');
    }

    public function search(){
        return view('search');
    }

    public function clientsearch(Client $info){
        $infos = $info->all();
        return view('clientsearch', compact('infos'));
    }

    public function clientindex(){
        return view('clientform');
    }

    public function clientform(ClientRequest $request) 
        {

        $client = new Client();

        $client->name = $request->name;
        $client->cpf = $request->cpf;
        $client->rg = $request->rg;
        $client->street = $request->street;
        $client->number = $request->number;
        $client->district = $request->district;
        $client->city = $request->city;
        $client->fone = $request->fone;
        $client->celfone = $request->celfone;

        $client->save();

        return redirect('/inicio');
    }

    public function clientshow(Client $data, string|int $id)
    {
        if(!$data = Client::find($id)){
        return back();
        }
        return view('clientshow', compact('data'));
    }
}
