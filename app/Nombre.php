<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nombre extends Model
{
    //
    protected $fillable = ["structure_id", 
    "conference", 
    "ouvrage", 
    "chapter", 
    "article_index", 
    "article", 
    "doctorat", 
    "brevet", 
    "manifestation_nat",
    "manifestation_reg",
    "membre_per",
    "created_at",
     "updated_at"];
}
