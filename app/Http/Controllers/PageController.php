<?php

namespace App\Http\Controllers;

use App\Prof;
use App\Note;
use App\Structure;
use App\Conference;
use App\Ouvrage;
use App\Chapter;
use App\Article;
use App\Doctorat;
use App\Membre;
use App\Manifestation;
use App\Coeff;
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

    public function affichermembres()
    {

        $membres = Membre::all();

        return view('affichermembres')->with(['membres' => $membres]);
        
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

    
    public function modifcoeff()
    {
        $coeff = Coeff::find(1);
        return view('modifcoeff')->with(['coeff' => $coeff]);
    }

    public function affichernote()
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
            }


        $structures = Structure::all();

        foreach($structures as $str){
            
            
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
                    if($art->indexe == "Oui"){
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
                    if($manif->type == "Locale" || $manif->type == "Regionale" || true){
                        $manifestation_reg = $manifestation_reg + 1;
                    }else{
                        $manifestation_nat = $manifestation_nat + 1;
                    }
                }

            }
        

            $total = $membre_per * $coeff_membre_per  + $conference * $coeff_conference + $ouvrage * $coeff_ouvrage + $chapter * $coeff_chapter + $article_index * $coeff_article_index + $article * $coeff_article + $doctorat * $coeff_doctorat + $manifestation_nat * $coeff_manifestation_nat + $manifestation_reg * $coeff_manifestation_reg ;
            
            $note = Note::updateOrCreate(
                ['structure_id' => $str->id],
                ['note' => $total]
            );

        }

        
        $struct = Structure::all()->sortBy(function($item) {
            return $item->Note->note * -1;
          });
        $m=Manifestation::find(1);
        $st=Structure::find(8);

        return view('affichernote')->with(['structures' => $struct, 'm' => $m, 'st' => $st]);
    }
    
}
