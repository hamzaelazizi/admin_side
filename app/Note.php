<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    //
    public function Structure(){
        return $this->belongsTo(Structure::class);
    }

    protected $fillable = ["structure_id", "note", "created_at", "updated_at"];

}
