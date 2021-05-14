<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orgaext extends Model
{
    //
    public function Manifestation(){
        return $this->belongsTo(Manifestation::class);
    }
}
