<?php

namespace App\Http\Controllers;
use App\Models\Carro;
use DB;

use Illuminate\Http\Request;

class CarroController extends Controller
{
    //
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $modelo=$request->input('modelo');
        $persona_id=$request->input('persona_id');
        DB::insert('insert into carros (modelo, persona_id) values (?,?)', [$modelo, $persona_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $carro = DB::table('carros')->where('id', $id)->get();
        return response()->json($carro);
    }
}
