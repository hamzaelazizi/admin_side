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

    public function manifestations(){
        return $this->belongToMany(manifestation::class);
    }
}
