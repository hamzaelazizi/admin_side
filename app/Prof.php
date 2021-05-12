<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prof extends Model
{
    public function Membre(){
        return $this->belongsTo(Membre::class);
    }


    public function Structure(){
        return $this->hasOne(Structure::class);
    }

    



    


}
