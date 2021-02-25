<?php

namespace App\Http\Controllers/*\personaControlle*/;

use Illuminate\Http\Request;
use App\Models\persona;
use DB;

class personaController extends Controller
{
    //public function saludar(Request $request){

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nombre=$request->input('nombre');
        DB::insert('insert into persona (nombre) values (?)', [$nombre]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return persona::find($id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showCarros($id)
    {
        return persona::find($id)->carro;
    }

    public function showCarrosConPersona($id)
    {
        return json_encode(array_merge(json_decode(persona::find($id), true),json_decode(persona::find($id)->carro, true)));
    }

    

}
