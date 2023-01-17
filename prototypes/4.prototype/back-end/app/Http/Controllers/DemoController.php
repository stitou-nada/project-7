<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
class DemoController extends Controller
{
    public function demo(){
        // $tmdb_id = 436270; //Black Adam (2022) Movie TMDB ID
        // $data = Http::asJson()
        $data =Http::get("https://api.themoviedb.org/3/movie/550?api_key=425414f904f9e89890479e354293848b")->json();
            // ->get(config('services.tmdb.endpoint').'movie/'.$tmdb_id. '?api_key='.config('services.tmdb.api'));
            // dd($data);
        return view('demo',compact('data'));
    }
}
