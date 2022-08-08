<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;

class CharacterController extends Controller
{
    public function characters(){
        return Character::all();
    }
    public function getCharacter($id){
        $result = Character::where('id', $id)->get();
        if(count($result)!=0) return $result[0];
    }
    public function editCharacter(Request $req){
        $response = (object)[]; 
        $status = Character::where('id', $req->id)
            ->update([
                'first_name' => $req->first_name,
                'last_name' => $req->last_name,
                'middle_name' => $req->middle_name,
                'birth_date' => $req->birth_date,
                'gender' => $req->gender,
                'height' => $req->height,
                'planet_id' => $req->planet_id['id'],
                'race_id' => $req->race_id['id'],
                'films_id' => $req->films_id['id'], 
            ]);

        $response->status = $status;
        return $response;
    }
    public function addCharacter(Request $req){
        $response = (object)[]; 
        $status = Character::insert([
                'first_name' => $req->first_name,
                'last_name' => $req->last_name,
                'middle_name' => $req->middle_name,
                'birth_date' => $req->birth_date,
                'gender' => $req->gender,
                'height' => $req->height,
                'planet_id' => $req->planet_id['id'],
                'race_id' => $req->race_id['id'],
                'films_id' => $req->films_id['id'],
            ]);

        $response->status = $status;
        return $response;
    }
    public function deleteCharacter($id){
        $response = (object)[];
        $status = Character::destroy('id', $id);
        $response->status = $status;
        return $response;
    }
    
}
