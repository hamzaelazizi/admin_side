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

    public function Note(){
        return $this->hasOne(Note::class);
    }

    protected $fillable = ["titre", "type", "Description", "Logo", "prof_id", "created_at", "updated_at"];

}
