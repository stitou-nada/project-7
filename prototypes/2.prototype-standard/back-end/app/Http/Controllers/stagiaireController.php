<?php

namespace App\Http\Controllers;

use App\Models\stagiaire;
use Illuminate\Http\Request;

class stagiaireController extends Controller
{

    public function index(Request $request)
    {
        $Stagiaire= stagiaire::where('Nom' ,'LIKE', $request->Nom.'%')->get();

        if(!empty($Stagiaire[0])){
        return ['message'=>$Stagiaire];
    }else{
        return ['message'=>"exist pas"];

    }

    }




}
