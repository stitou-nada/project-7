<?php

namespace App\Http\Controllers;

use App\Models\filmFavorie;
use Illuminate\Http\Request;

class movieController extends Controller
{

    public function store(Request $request)
    {
    $store = new filmFavorie();
        $store->titre = $request->titre;
        $store->saison = $request->saison;
        $store->acteur = $request->acteur;
        $store->annee = $request->annee;
        $store->image = $request->image;
        $store->save();
    }




}
