<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auteur extends Model
{
    //
    public function Conference(){
        return $this->belongsTo(Conference::class);
    }
}
