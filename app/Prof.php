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

    static public function Strmbr($prof){
        $strs= Structure::all();
        foreach($strs as $str){
            if($str['id'] == $prof->Membre->structure_id){
                return $str;  
            }
        }
        return null;
    }





    


}
