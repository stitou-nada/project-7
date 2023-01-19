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
        $store->name = $request->name;
        $store->save();
    }




}
