<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Race;

class RaceController extends Controller
{
    public function allRaces(){
        return Race::all();
    }
    public function races(Request $request){
        $response = (object)[]; 

        $page = $request->has('page') ? $request->get('page') : 1;
        $limit = $request->has('pageSize') ? $request->get('pageSize') : 10;

        $items = Race::limit($limit)->offset(($page - 1) * $limit)->get()->toArray();
        
        $response->items = $items;
        $response->count = count($items);
        return $response;
    }
    public function getRace($id){
        $result = Race::where('id', $id)->get();
        if(count($result)!=0) return $result[0];
    }
    public function editRace(Request $req){
        $response = (object)[]; 
        $status = Race::where('id', $req->id)
            ->update([
                'name' => $req->name,
                'height_average' => $req->height_average,
                'life_average' => $req->life_average,
            ]);

        $response->status = $status;
        return $response;
    }
    public function addRace(Request $req){
        $response = (object)[]; 
        $status = Race::insert([
                'name' => $req->name,
                'height_average' => $req->height_average,
                'life_average' => $req->life_average,
            ]);

        $response->status = $status;
        return $response;
    }
    public function deleteRace($id){
        $response = (object)[];
        $status = Race::destroy('id', $id);
        $response->status = $status;
        return $response;
    }
}
