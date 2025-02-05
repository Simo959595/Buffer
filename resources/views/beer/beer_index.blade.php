{{-- inizio layout --}}
<x-layout>

{{-- navbar --}}
<x-navbar />

{{-- inizio container --}}
<div class="container">
    <div class="row">
        <div class="col-12">
            
            <h1>Indice catalogo delle nostre birre</h1>
            
{{-- metodo foreach per le card collegate ognuna ad un nuovo oggetto creato --}}

@foreach ($beers as $beer)

<div class="card" style="width: 18rem;">
    <img src="{{Storage::url($beer->img)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$beer->name}}</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="{{route("beer.show", compact("beer"))}}" class="btn btn-primary">Vai al dettaglio</a>
    </div>
  </div>
  
@endforeach



        </div>
    </div>
</div>
{{-- fine container --}}

{{-- footer --}}
<x-footer />

{{-- fine layout --}}
</x-layout>