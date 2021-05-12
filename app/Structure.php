<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Structure extends Model
{
    //
    public function Prof(){
        return $this->belongsTo(Prof::class);
    }

    public function Membres(){
        return $this->hasMany(Membre::class);
    }

    static public function of($id){
         $structures = self::all();
         $rt= [];

         foreach($structures as $str){
            if($str['prof_id'] == $id){
                $rt []= $str; 
                            }
            return $rt[0];
            }     
    }

}
