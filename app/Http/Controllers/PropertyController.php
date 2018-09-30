<?php

namespace App\Http\Controllers;

use App\PostProperty;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Property;
use DB;

class PropertyController extends Controller
{
    //show the property view
    public function showView()
    {
        return view('browse_properties');
    }


//    public function addProperty(Request $request)
//    {
//
//
//
//        DB::table('properties')->create([
//            'house_number' => $request->input('house_number'),
//            'post_code' => $request->input('post_code'),
//            'property_type' => $request->input('property_type'),
//            'bed_no' => $request->input('bed_no'),
//            'bathrooms_no' => $request->input('bathrooms_no'),
//            'price' => $request->input('price'),
//            'commission' => $request->input('commission'),
//            'description' => $request->input('description'),
//
//        ]);
//    }
public function show(new){

}
public function addProperty(Request $request){


        $newProperty = PostProperty::created($request->all());
        return view('/form');
}


}
