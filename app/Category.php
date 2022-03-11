<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Récuperer la catégorie parent d'une catégorie
    public function parent() {
        return $this->belongsTo(Category::class, 'parent_id');
    }
    //Récuperer la catégorie fille d'une catégorie
    public function childrens() {
        return $this->hasMany(Category::class, 'parent_id');
    }
    //Récuperer tous les produits associés à une categorie >> OneToMany
    public function produitsParent(){
        return $this->hasMany(Produit::class,'id_category');
    }
    //Récuperer les produits situés dans une catégory enfant à travers d'une gategory parent
    public function produitsChild(){
        return $this->hasManyThrough( Produit::class, Category::class,'parent_id', 'id_category' );
    }
    //Combinaison entre les 2
    public function produits(){
        $produits= $this->produitsParent()->get()->merge($this->produitsChild()->get());
        return $produits;
    }

     
    public function toArray()
    {
        $attributes = $this->attributesToArray();
        $attributes = array_merge($attributes, $this->relationsToArray());

        // Detect if there is a pivot value and return that as the default value
        if (isset($attributes['pivot']['value'])) {
            $attributes['value'] = $attributes['pivot']['value'];
            unset($attributes['pivot']);
        }
        return $attributes;
    }
   
}
