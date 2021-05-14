<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auteur extends Model
{
    //
    public function Conference(){
        return $this->belongsTo(Conference::class);
    }
    public function Article(){
        return $this->belongsTo(Article::class);
    }
    public function Chapter(){
        return $this->belongsTo(Chapter::class);
    }
    public function Ouvrage(){
        return $this->belongsTo(Ouvrage::class);
    }
}
