<?php

namespace App\Http\Controllers;

use App\Models\stagiaire;
use Illuminate\Http\Request;

class stagiaireController extends Controller
{

    public function index()
    {
      return response()->json(stagiaire::all());


    }


    public function search(Request $request)
    {
        $Stagiaire= stagiaire::where('Nom' ,'LIKE', $request->Nom.'%')->get();

        if(!empty($Stagiaire[0])){
        return ['message'=>$Stagiaire];
    }else{
        return ['message'=>"exist pas"];

    }

    }
    public function list(Request $request,$id)
    {
        $Stagiaire =stagiaire::find($id);
        return ['message'=>$Stagiaire];

    }






}
