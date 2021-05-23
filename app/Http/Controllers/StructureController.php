<?php

namespace App\Http\Controllers;

use App\Structure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StructureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('structures.create');
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
        $request->validate([
            'titre' => 'required',
            'type' => 'required',
            'Description' => 'required',
        ]);
        
        if ($request->hasFile('Logo')) {

            

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->Logo->store('Logo', 'public');
            \File::copy( Storage::disk('public')->path('Logo/'.$request->Logo->hashName()), Storage::disk('out')->path('Logo/'.$request->Logo->hashName()));

            

            // Store the record, using the new file hashname which will be it's new filename identity.
            Structure::create([
                "titre" => $request->get('titre'),
                "type" => $request->get('type'),
                "Description" => $request->get('Description'),
                "prof_id" => 0,
                "Logo" => $request->Logo->hashName(),
                ]); 

          //  $structure = new Structure([
           //     "titre" => $request->get('titre'),
             //   "type" => $request->get('type'),
             //   "Description" => $request->get('Description'),
             //   "prof_id" => 0,
              //  "Logo" => $request->Logo->hashName()
           // ]);
           // $structure->save(); // Finally, save the record.
        }

        return view('ajouterstructure');
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
