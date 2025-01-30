<?php

namespace App\Http\Controllers;

use App\Models\Beer;
use Illuminate\Http\Request;

class BeerController extends Controller
{
    public function beerForm(){
        return view("beer.beer_form");
    }

    // metodo per inserire i dati della birra nel database creando un oggetto
    public function beerStore(Request $request){
        $beer = Beer::create(
        [
            "name" => $request-> name, 
            "type" => $request-> type, 
            "cl" => $request-> cl, 
            "nat" => $request-> nat, 
            "description" => $request-> description
        ]

        );
            return redirect()->route("beer.index");

    }
    
    public function beerIndex(){
        return view("beer.beer.index");
    }


}
