@extends('home')
@section('content')
<div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        {{--  {{dump($produits)}} --}}
        @foreach ($produits as $produit)
        <div class="col">
            <div class="card shadow-sm">
              <img class="card-img-top" width="100%" height="225" 
              src="{{ asset('produits/'.$produit->photo_principale)}}" alt="Card image cap">
  
              <div class="card-body">
                <p class="card-text"> {{ $produit->nom }} <br> {{$produit->description}}</p>
                  <br> <span class="badge badge-info"><a class="text-white" href="{{ route('voir_produits_par_cat',['id'=> $produit->category->id])}}">{{$produit->category->nom}}</a></span>
                
                <div class="d-flex justify-content-between align-items-center">
                    <span class="price">{{number_format($produit->prix_ht,2)}} €</span>
                    <a href="{{ route('voir_produit', ['id'=>$produit->id ]) }}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                </div>
              </div>
            </div>
          </div>  
        @endforeach


      </div>
    </div>
  </div>
@endsection
