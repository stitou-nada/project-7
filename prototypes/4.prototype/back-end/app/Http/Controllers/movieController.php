<?php

namespace App\Http\Controllers;

use App\Models\filmFavorie;
use Illuminate\Http\Request;

class movieController extends Controller
{

    public function store(Request $request)
    {
    $store = new filmFavorie();
        $store->titre = $request->l;
        $store->saison = $request->id;
        $store->acteur = $request->acteur;
        $store->annee = $request->annee;
        $store->image = $request->imageUrl;
        $store->save();
    }
    public function FavoritList(){

        $list = filmFavorie::all();
        return $list;
    }




}
