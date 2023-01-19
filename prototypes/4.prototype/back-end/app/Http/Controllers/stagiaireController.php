<?php

namespace App\Http\Controllers;

use App\Models\Cenima;
use App\Models\stagiaire;
use Illuminate\Http\Request;

class stagiaireController extends Controller
{

    public function store(Request $request)
    {
    $store = new Cenima();
        $store->name = $request->name;
        $store->save();
    }




}
