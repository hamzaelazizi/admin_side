<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membre extends Model
{
    public function Prof(){
        return $this->hasOne(Prof::class);
    }

    public function Structure(){
        return $this->belongsTo(Structure::class);
    }

    public function Manifestations(){
        return $this->belongsToMany(Manifestation::class);
    }

    public function Conferences(){
        return $this->belongsToMany(Conference::class);
    }
}
