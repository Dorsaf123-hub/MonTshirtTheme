<?php

use App\Produit;
use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $produit= new App\Produit(); 
        $produit->nom = "T-Shirt Goonies";
        $produit->prix_ht =25;
        $produit->description = "T-Shirt du film les Goonies";
        $produit->photo_principale = "goonies.jpg";
        $produit->id_category = 1;
        $produit->save();

        $produit= new App\Produit(); 
        $produit->nom = "T-Shirt star trek";
        $produit->prix_ht =39;
        $produit->description = "T-Shirt du film star trek";
        $produit->photo_principale = "star_trek_kirk.jpg";
        $produit->id_category = 1;
        $produit->save();

        $produit= new App\Produit(); 
        $produit->nom = "T-Shirt Little Miss Sunshine";
        $produit->prix_ht =36;
        $produit->description = "une belle aventure familiale";
        $produit->photo_principale = "little_miss_sunshine.jpg";
        $produit->id_category= 1;
        $produit->save();

        $produit= new App\Produit(); 
        $produit->nom = "T-Shirt Krusty le Clown";
        $produit->prix_ht =25;
        $produit->description = "T-Shirt du film qui rend super rigolo";
        $produit->photo_principale = "krusty_simpsons.jpg";
        $produit->id_category = 6;
        $produit->save();

        $produit= new App\Produit(); 
        $produit->nom = "T-Shirt M. Happy";
        $produit->prix_ht =45;
        $produit->description = "T-Shirt du film qui rend heureux";
        $produit->photo_principale = "happy.jpg";
        $produit->id_category = 6;
        $produit->save();

        $produit= new App\Produit(); 
        $produit->nom = "T-Shirt Hulk";
        $produit->prix_ht =23;
        $produit->description = "T-Shirt du film qui rend super fort";
        $produit->photo_principale = "hulk.jpg";
        $produit->id_category = 2;
        $produit->save();

        $produit= new App\Produit(); 
        $produit->nom = "T-Shirt les simpsons";
        $produit->prix_ht =15;
        $produit->description = "T-Shirt du film super cool";
        $produit->photo_principale = "simpsons.jpg";
        $produit->id_category = 6;
        $produit->save();

        $produit= new App\Produit(); 
        $produit->nom = "T-Shirt superMan";
        $produit->prix_ht =18;
        $produit->description = "T-Shirt du film super man";
        $produit->photo_principale = "super_man.jpg";
        $produit->id_category = 1;
        $produit->save();

        $produit= new App\Produit(); 
        $produit->nom = "T-Shirt Wonder Woman";
        $produit->prix_ht =42;
        $produit->description = "T-Shirt du film Wonder Woman";
        $produit->photo_principale = "wonder_woman.jpg";
        $produit->id_category = 2;
        $produit->save();
    }
}
