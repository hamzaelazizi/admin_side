<?php

namespace App\Http\Controllers;

use App\Prof;
use App\Structure;
use App\Membre;
use App\Manifestation;

use Illuminate\Http\Request;

class AjouterMembreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        
    }
    
    public function test()
    {
        $prof= prof::find(1);
          $manif = manifestation::find(1);
          $membres = $manif->Organisateurs;
        //  $membres = Membre::all();
        //  $manif->Organisateurs()->attach($membres);
        $structure = prof::strmbr($prof);
          //$structure = Structure::of($prof->id);
        
        return view('test')->with(['prof' => $prof, 'structure' => $structure, 'membres' => $membres]);
    }


    public function addprofp()
    {
        return view('ajouterprofp');
    }

    public function addprofnp()
    {
        return view('ajouterprofnp');
    }

    public function adddoc()
    {
        return view('ajouterdoc');
    }
    public function adddoctorant()
    {
        return view('ajouterdoctorant');
    }

    public function ajouterprofp()
    {
        return view('ajouterdoctorant');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
