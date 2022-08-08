<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planet;

class PlanetController extends Controller
{
    public function allPlanets(){
        return Planet::all();
    }
    public function planets(Request $request){
        $response = (object)[]; 

        $page = $request->has('page') ? $request->get('page') : 1;
        $limit = $request->has('pageSize') ? $request->get('pageSize') : 10;

        $items = Planet::limit($limit)->offset(($page - 1) * $limit)->get()->toArray();
        
        $response->items = $items;
        $response->count = count($items);
        return $response;
    }
    public function getPlanet($id){
        $result = Planet::where('id', $id)->get();
        if(count($result)!=0) return $result[0];
    }
    public function editPlanet(Request $req){
        $response = (object)[]; 
        $status = Planet::where('id', $req->id)
            ->update([
                'name' => $req->name,
                'diameter' => $req->diameter,
            ]);

        $response->status = $status;
        return $response;
    }
    public function addPlanet(Request $req){
        $response = (object)[]; 
        $status = Planet::insert([
                'name' => $req->name,
                'diameter' => $req->diameter,
            ]);

        $response->status = $status;
        return $response;
    }
    public function deletePlanet($id){
        $response = (object)[];
        $status = Planet::destroy('id', $id);
        $response->status = $status;
        return $response;
    }
}
