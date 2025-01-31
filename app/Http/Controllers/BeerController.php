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
            "description" => $request-> description, 
            "img" => $request-> file("img")->store("cover_beer", "public"), 

        ]

        );
            return redirect()->route("beer.index");

    }
    
    public function beerIndex(){
        $beers = Beer::all();
        return view("beer.beer_index", ["beers"=> $beers]);
    }


    public function beerShow(Beer $beer){
        return view("beer.beer_show", compact("beer"));
    }

    
}
