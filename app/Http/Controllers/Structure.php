<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Structure extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(){
        
        $request->validate([
            'titre' => 'required',
            'type' => 'required',
            'Description' => 'required',
        ]);
        
        if ($request->hasFile('Logo')) {

            $request->validate([
                'Logo' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->Logo->store('Logo', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
            $structure = new Structure([
                "titre" => $request->get('titre'),
                "type" => $request->get('type'),
                "Description" => $request->get('Description'),
                "prof_id" => 0,
                "Logo" => $request->Logo->hashName()
            ]);
            $structure->save(); // Finally, save the record.
        }

        return view('afficherstructures');

    }

}
