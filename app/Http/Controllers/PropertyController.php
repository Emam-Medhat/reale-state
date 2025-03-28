<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PropertyController extends Controller
{
    public function create(){
        return view('home.property.create');
    }
    public function insert(Request $request)
    {
        $photoPath = null;

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public'); // يحفظ الصورة في storage/app/public/photos
        }

        DB::table('properties')->insert([
            'title' => $request->title,
            'address' => $request->address,
            'price' => $request->price,
            'photo' => $request->photo , 
            'location' => $request->location,
            'date_added' => $request->date_added,
            'property_type' => $request->property_type,
            'area' => $request->area,
            'transaction_type' => $request->transaction_type,
            'number_of_rooms' => $request->number_of_rooms,
        ]);

        return redirect('/');
    }    public function index(){
        $posts = DB::table('properties')->get();
        return view('home.property.index', ['posts' => $posts]);
    }
    public function edit($id){
        $post = DB::table('properties')->where('id', $id)->first();
        return view('home.property.edit', ['post' => $post]);
    }
    public function update(Request $request, $id){
        DB::table('properties')->where('id', $id)->update([
           'title'=>$request->title,
            'address'=>$request->address,
            'price'=>$request->price,
            'photo'=>$request->photo,
            'location'=>$request->location,
            'date_added'=>$request->date_added,
            'property_type'=>$request->property_type,
            'area'=>$request->area,
            'transaction_type'=>$request->transaction_type,
            'number_of_rooms'=>$request->number_of_rooms,
        ]);
        return redirect()->route('properties');
    }
    public function delete($id){
        DB::table('properties')->where('id', $id)->delete();
        return redirect()->route('properties');
    }
}
