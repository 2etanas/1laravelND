<?php

namespace App\Http\Controllers;

use App\Models\Client; //susiejimas su modeliu
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;

class ClientController extends Controller
{
    //dvieju tipu metodai
    //1. Metodai, kuriu tikslas - grazinti view, kai sudarinejame GET metoda
    //2. metodai kuriu tikslas grazinti/perduoti duomenis (json, tekstas, html), naudojame POST metoda

    // index/create/show/edit - GET metodas



    // store/update/destroy - POST metodas

    //GET  
    public function manoMetodas () {
        echo 'Atlieku super duper vaizdelis';
    }

    public function sudek() {
        //$a = 5;
        // $b = 10;
        // $suma = $a + $b;
        // kintamasis susma turi atsidurti vaizde skaiciavimoRezultatas.blade.php

        $a = 5;
        $b = 10;
        $suma = $a + $b;
        //skaiciavimoRezultatas.blade.php failas dabar mato $suma kintamaji
        // return view('skaiciavimoRezultatas',['suma'=> $suma]);

        //skaiciavimoRezultatas.blade.php failas matytu $a ir $b kintamauosius


        return view('skaiciavimoRezultatas',['suma'=> $suma, 'a'=>$a, 'b'=>$b]);
    }
    //pagalbiniai metodai - kurie bus naudojami kituose metoduose. Isvis keliuose nebus aprasomi

    /**
     * Display a listing of the resource.
     * parodyti visus klientus
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "Visi klientai";
    }

    /**
     * Show the form for creating a new resource.
     * Naujo kliento formos atvaizdavimas
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo "klientu kurimas";
    }

    /**
     * Store a newly created resource in storage.
     * naujo kliento duomenu issaugojima (perdavimas modeliui)
     * @param  \App\Http\Requests\StoreClientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClientRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * parodyti informacija apie specifini klienta
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        echo "atvaizduoju viena klienta";
    }

    /**
     * Show the form for editing the specified resource.
     * kliento redagavimo formos atvaizdavimas
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        echo "redaguoju klienta";
    }

    /**
     * Update the specified resource in storage.
     * kliento redagavimo duomenu issaugijimas (perdavimas modeliui)
     * @param  \App\Http\Requests\UpdateClientRequest  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * instrukcija istrinti specifini klienta
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
