<?php

namespace App\Http\Controllers;

use App\Models\filmAvoir;
use App\Models\filmFavorie;
use Illuminate\Http\Request;

class movieController extends Controller
{

    public function store(Request $request)
    {
    $store = new filmAvoir();
        $store->titre = $request->title;
        $store->id = $request->id;
        $store->description = $request->overview;
        $store->date = $request->release_date;
        $store->moyenne_vote = $request->vote_average;
        $store->image = $request->poster_path;
        $store->type = $request->type;
        $store->save();
    }
    public function ListAvoir(){

        $list = filmAvoir::all();
        return $list;
    }
    public function select($type){

        $select = filmAvoir::where('type' , $type )->get();
        return $select;
    }



}
