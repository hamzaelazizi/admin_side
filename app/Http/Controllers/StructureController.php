<?php

namespace App\Http\Controllers;

use App\Structure;
use App\Prof;
use App\Note;
use App\Conference;
use App\Ouvrage;
use App\Chapter;
use App\Article;
use App\Doctorat;
use App\Membre;
use App\Manifestation;
use App\Coeff;
use App\Nombre;
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

    public function supp()
    {
        
           $str=Structure::find((int)request("submit"));
           $str->delete();
           return redirect('/afficherstructures')->withSuccess('');
    }

    public function editer()
    {
        
           $structure=Structure::find((int)request("submit"));
           
           $profs=Prof::all();
           $membres = array();
           foreach($profs as $prof){
            $membres[] = $prof->Membre; 
           }
           
           return view('/modifierstructure')->with(['structure'=> $structure, 'membres'=>$membres]);
    }

    public function note()
    {
        $coeffs=Coeff::all();

            $coeff_membre_per = 1;
            $coeff_conference = 1;
            $coeff_ouvrage = 1;
            $coeff_chapter = 1;
            $coeff_article_index = 1;
            $coeff_article = 1;
            $coeff_doctorat = 1;
            $coeff_manifestation_nat = 1;
            $coeff_manifestation_reg = 1;
            $coef = Coeff::find(10);

            foreach($coeffs as $coeff){
                $coeff_membre_per = $coeff->membre_per;
                $coeff_conference = $coeff->conference;
                $coeff_ouvrage = $coeff->ouvrage;
                $coeff_chapter = $coeff->chapter;
                $coeff_article_index = $coeff->article_index;
                $coeff_article = $coeff->article;
                $coeff_doctorat = $coeff->doctorat;
                $coeff_manifestation_nat = $coeff->manifestation_nat;
                $coeff_manifestation_reg = $coeff->manifestation_reg;
                $coef = $coeff;
            }
        
           $str=Structure::find((int)request("submit"));

           $conferences = Conference::all();
            $ouvrages = Ouvrage::all();
            $chapters = Chapter::all();
            $articles = Article::all();
            $doctorats = Doctorat::all();
            $manifestations = Manifestation::all();

            $membre_per = 0;
            $conference = 0;
            $ouvrage = 0;
            $chapter = 0;
            $article_index = 0;
            $article = 0;
            $doctorat = 0;
            $manifestation_nat = 0;
            $manifestation_reg = 0;
            
            foreach($str->Membres as $mbr){$membre_per = $membre_per + 1;}

            foreach($conferences as $conf){
                $test = 0;
                foreach($conf->Auteurs as $x){
                    foreach($str->Membres as $y){
                        if($x->id == $y->id){$test = 1;} 
                    }
                }
                if($test == 1){
                    $conference = $conference + 1;
                }

            }
        
            foreach($ouvrages as $ouv){
                $test = 0;
                foreach($ouv->Auteurs as $x){
                    foreach($str->Membres as $y){
                        if($x->id == $y->id) $test = 1;
                    }
                }
                if($test == 1){
                    $ouvrage = $ouvrage + 1;
                }

            }

            foreach($chapters as $chap){
                $test = 0;
                foreach($chap->Auteurs as $x){
                    foreach($str->Membres as $y){
                        if($x->id == $y->id) $test = 1;
                    }
                }
                if($test == 1){
                    $chapter = $chapter + 1;
                }

            }

            foreach($articles as $art){
                $test = 0;
                foreach($art->Auteurs as $x){
                    foreach($str->Membres as $y){
                        if($x->id == $y->id) $test = 1;
                    }
                }
                if($test == 1){
                    if($art->indexe == "oui"){
                        $article_index = $article_index + 1;
                    }else{
                        $article = $article + 1;
                    }
                    
                }

            }

            foreach($manifestations as $manif){
                $test = 0;
                foreach($manif->Organisateurs as $x){
                    foreach($str->Membres as $y){
                        if($x->id == $y->id){$test = 1;} 
                        
                    }
                   
                }
                if($test == 1){
                    if($manif->type == "locale" || $manif->type == "regionale"){
                        $manifestation_reg = $manifestation_reg + 1;
                    }else if($manif->type == "nationale" || $manif->type == "internationale"){
                        $manifestation_nat = $manifestation_nat + 1;
                    }
                }

            }
        

            $total = $membre_per * $coeff_membre_per  + $conference * $coeff_conference + $ouvrage * $coeff_ouvrage + $chapter * $coeff_chapter + $article_index * $coeff_article_index + $article * $coeff_article + $doctorat * $coeff_doctorat + $manifestation_nat * $coeff_manifestation_nat + $manifestation_reg * $coeff_manifestation_reg ;
            
            $note = Note::updateOrCreate(
                ['structure_id' => $str->id],
                ['note' => $total]
            );

            $nombre = Nombre::updateOrCreate(
                ['structure_id' => $str->id],
                ['conference' => $conference,
                'membre_per' => $membre_per,
                'ouvrage' => $ouvrage,
                'chapter' => $chapter,
                'article_index' => $article_index,
                'article' => $article,
                'doctorat' => $doctorat,
                'manifestation_nat' => $manifestation_nat,
                'manifestation_reg' => $manifestation_reg,
                'brevet'=>0]
            );


           $structure=Structure::find((int)request("submit"));

           
           
           
           return view('/notestructure')->with(['structure'=> $structure, 'nombre'=> $nombre, 'coef'=>$coef]);
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

        return redirect('/ajouterstructure')->withSuccess('');
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
        $str = Structure::find($id);

        if ($request->hasFile('Logo')) {

        $request->Logo->store('Logo', 'public');
            \File::copy(Storage::disk('public')->path('Logo/'.$request->Logo->hashName()), Storage::disk('out')->path('Logo/'.$request->Logo->hashName()));

            if(\File::exists(Storage::disk('public')->path('Logo/'.$str->Logo))){
                \File::delete(Storage::disk('public')->path('Logo/'.$str->Logo));
                }

                if(\File::exists(Storage::disk('out')->path('Logo/'.$str->Logo))){
                    \File::delete(Storage::disk('out')->path('Logo/'.$str->Logo));
                    }


        Structure::where('id', $id)->update([
            "titre" => $request->get('titre'),
                "type" => $request->get('type'),
                "Description" => $request->get('Description'),
                "prof_id" => $request->get('responsable_id'),
                "Logo" => $request->Logo->hashName(),
                
        ]);

        }else{
            Structure::where('id', $id)->update([
                "titre" => $request->get('titre'),
                    "type" => $request->get('type'),
                    "Description" => $request->get('Description'),
                    "prof_id" => $request->get('responsable_id'),
                    
            ]);

        }

        return redirect('/afficherstructures')->withSuccess('');
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
