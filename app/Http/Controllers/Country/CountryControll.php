<?php

namespace App\Http\Controllers\Country;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Country\CountryModel;
use Illuminate\Support\Facades\Validator;

class CountryControll extends Controller
{
    public function index(){

        return response()->json(CountryModel::get(), 200);
    }
    public function indexId($id){
        $country = CountryModel::find($id);
        if(is_null($country)){

            return response()->json(['message' => 'Record tidak ditemukan'], 404);
        }

        return response()->json($country, 200);
    }
    public function indexSave(Request $req){

        $rule = [
            'name' => 'required|min:3',
            'iso' => 'required|min:2|max:2'
        ];

        $validator = Validator::make($req->all(), $rule);

        if($validator->fails()){
            return response()->json($validator->errors(), 400);

        }
        
        $country = CountryModel::create($req->all());
        return response()->json($country, 201);
    }
    public function indexUpdate(Request $req, $id){

        $country = CountryModel::find($id);
        if(is_null($country)){
            return response()->json(['message' => 'Record tidak ditemukan'], 404);
        }
        $country->update($req->all());
        return response()->json($country, 200);

    }
    public function indexDelete($id){
        $country = CountryModel::find($id);
        if(is_null($country)){
            return response()->json(['message' => 'Record tidak ditemukan'], 404);
        }

        $country->delete();
        return response()->json($country, 204);
    }
}
