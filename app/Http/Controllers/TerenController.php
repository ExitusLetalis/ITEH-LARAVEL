<?php

namespace App\Http\Controllers;

use App\Http\Resources\TerenResurs;
use App\Models\Teren;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TerenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TerenResurs::collection(Teren::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teren  $teren
     * @return \Illuminate\Http\Response
     */
    public function show(Teren $teren)
    {
        return new TerenResurs($teren);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teren  $teren
     * @return \Illuminate\Http\Response
     */
    public function edit(Teren $teren)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teren  $teren
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teren $teren)
    {
        $validator = Validator::make($request->all(), [
            'naziv' => 'required',
            'lokacija' => 'required',
            'kapacitet' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['Došlo je do greške!', $validator->errors()]);
        }

        $teren->naziv = $request->naziv;
        $teren->lokacija = $request->lokacija;
        $teren->kapacitet = $request->kapacitet;
        $teren->save();

        return response()->json('Teren je uspešno izmenjen u bazi podataka!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teren  $teren
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teren $teren)
    {
        $teren->delete();
        return response()->json('Teren je uspešno obrisan iz baze podataka!');
    }
}
