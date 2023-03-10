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

    public function ExisteMovie($id){
        $list = filmAvoir::where("id",$id)->get();
        if(!empty($list[0])){
            return ['message'=>"true"];
        }else{
            return ['message'=>"false"];

        }
    }
    public function delete($id){

        filmAvoir::where('id',$id)->delete();
        // $list = filmAvoir::select("*")->get();

        // return $list;
    }

}
