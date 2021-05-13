<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manifestation extends Model
{
    //
    public function Organisateurs(){
        return $this->belongToMany(Membre::class);
    }
}


// $manifestation->Organisateurs()->Attach($Membres);