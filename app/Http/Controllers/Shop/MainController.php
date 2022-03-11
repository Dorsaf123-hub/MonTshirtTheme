<?php

namespace App\Http\Controllers\Shop;

use App\Category;
use App\Http\Controllers\Controller;
use App\Produit;
use App\Tag;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {

     //select * from produits
        $produits= Produit::all();
        
     //dd($produits);
     //envoie d'un Data sous form de tableau  <compact>
        return view('shop.index',compact('produits'));

    }

    public function produit(Request $request){

        //select * from produits where id = ?
        $produit = Produit::find($request->id);

        //dd($request->id);
        return view ('shop.produit',compact('produit'));
    }

    public function ViewByCategory(Request $request){

        //recupere tous les categories where is_online =1
        //$categories= Category::where('is_online',1)->get();

        //select * from produit where id_category = $request->id
        //$produits = Produit::where('id_category',$request->id)->get();
        $category = Category::find($request->id);
        $produits = $category->produits();
       
        return view('shop.categorie', compact('produits','category'));
    }

    public function ViewByTag(Request $request){
        $tag = Tag::find($request->id);
        $produits = $tag->produits;
       
        return view('shop.categorie', compact('produits','tag'));
    }

   
}
