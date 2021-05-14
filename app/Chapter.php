<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    //
    public function Auteurexts(){
        return $this->hasMany(Auteur::class);
    }
    public function Auteurs(){
        return $this->belongsToMany(Membre::class);
    }
}
