<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

class FilmController extends Controller
{
    public function allFilms(){
        return Film::all();
    }
    public function films(Request $request){
        $response = (object)[]; 

        $page = $request->has('page') ? $request->get('page') : 1;
        $limit = $request->has('pageSize') ? $request->get('pageSize') : 10;

        $items = Film::limit($limit)->offset(($page - 1) * $limit)->get()->toArray();
        
        $response->items = $items;
        $response->count = count($items);
        return $response;
    }
    public function getFilm($id){
        $result = Film::where('id', $id)->get();
        if(count($result)!=0) return $result[0];
    }
    public function editFilm(Request $req){
        $response = (object)[]; 
        $status = Film::where('id', $req->id)
            ->update([
                'name' => $req->name,
                'budget' => $req->budget,
                'date' => $req->date,
                'link' => $req->link,
            ]);

        $response->status = $status;
        return $response;
    }
    public function addFilm(Request $req){
        $response = (object)[]; 
        $status = Film::insert([
                'name' => $req->name,
                'budget' => $req->budget,
                'date' => $req->date,
                'link' => $req->link,
            ]);

        $response->status = $status;
        return $response;
    }
    public function deleteFilm($id){
        $response = (object)[];
        $status = Film::destroy('id', $id);
        $response->status = $status;
        return $response;
    }
}
