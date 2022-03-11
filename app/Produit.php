<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    //les relayions associes 
    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    public function recommandations(){
        return $this->belongsToMany(Produit::class,'produit_recommande','produit_id','produit_recommande_id');
    }
}
