<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Membre;
use App\Prof;

use App\Mail\UserRegistered;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class ProfController extends Controller
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
        $request->image->store('Logo', 'public');
        \File::copy( Storage::disk('public')->path('Logo/'.$request->image->hashName()), Storage::disk('out')->path('Logo/'.$request->image->hashName()));

        

        // Store the record, using the new file hashname which will be it's new filename identity.
       $newmembre= Membre::create([
            "nom" => $request->get('nom'),
            "prenom" => $request->get('prenom'),
            "email" => $request->get('email'),
            "structure_id" => $request->get('structure'),
            "genre" => $request->get('genre'),
            "statut" => $request->get('genre'),
            "grade" => $request->get('grade'),
            "fonction" => "Professeur",
            "etablissement" => $request->get('grade'),
            "image" => $request->image->hashName(),
            ]); 
            $password = str_random(8);
            Prof::create([
                'name'=> $request->get('nom')." ".$request->get('prenom'),
                'email'=>$request->get('email'),
                'password'=>Hash::make($password),
                'membre_id'=>$newmembre->id,
         ]);

         Mail::to($request->get('email'))->send(new \App\Mail\EnsatLab($password));


            return redirect('/ajouterprof')->withSuccess('');
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
