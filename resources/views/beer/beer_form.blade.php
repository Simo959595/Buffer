{{-- inizio layout --}}
<x-layout>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Inserisci la tua birra preferita</h1>
        </div>

        {{-- inizio form di inserimento prodotti --}}
        <form method="POST" action="{{route("beer.store")}}">
@csrf
{{-- PROMEMORIA PER INSERIRE I DATI: protected $fillable = ["name", "type", "cl", "nat", "description"]; --}}
            {{-- primo f. --}}
            <div class="mb-3">
                <label class="form-label">Nome della birra</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" name="name">
            </div>
            
            {{-- secondo f. --}}
            <div class="mb-3">
                <label class="form-label">Dimensione in "cl"</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" name="type">
            </div>
            
            {{-- terzo f. --}}
            <div class="mb-3">
                <label class="form-label">Nazionalità</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" name="cl">
            </div>
            
            {{-- quarto f. --}}
            <div class="mb-3">
              <label class="form-label">Tipologia</label>
              <input type="text" class="form-control" aria-describedby="emailHelp" name="nat">
            </div>
          
            {{-- textarea --}}
            <div class="form-floating mb-3">
                <textarea name="description" class="form-control" placeholder="Leave a comment here" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Descrivi la birra</label>
              </div>

              {{-- tasto --}}
            <button type="submit" class="btn btn-primary">Inserisci la tua birra</button>
          
            {{-- fine form --}}
        </form>
    </div>
</div>

{{-- fine layout --}}
</x-layout>