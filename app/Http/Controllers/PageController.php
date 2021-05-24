<?php

namespace App\Http\Controllers;

use App\Prof;
use App\Structure;
use App\Membre;
use App\Manifestation;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function afficherstructures()
    {

        $structures = Structure::all();

        return view('afficherstructures')->with(['structures' => $structures]);
        
    }
    public function ajouterstructure()
    {
        return view('ajouterstructure');
    }

    public function ajoutermembre()
    {
        $structures = Structure::all();
        return view('ajoutermembre')->with(['structures' => $structures]);
    }

    public function ajouterprof()
    {
        $structures = Structure::all();
        return view('ajouterprof')->with(['structures' => $structures]);
    }
    
}
