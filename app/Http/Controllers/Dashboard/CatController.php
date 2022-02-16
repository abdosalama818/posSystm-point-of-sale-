<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Cat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CatController extends Controller
{

    public function store(Request $request)
    {
/*
        $request->validate([
            'name' =>'required|string|max:255',
            'img' =>'required|image|mimes:png,jpg'
        ]);
*/
$img_path = Storage::putFile('category',$request->img);
        Cat::create([
            'name' =>$request->cat_name,
            'img' =>$img_path,
        ]);
        return redirect(url('cats'));

    }


    public function edit_cat($id)
    {
         $cat = Cat::findOrFail($id);
         return view('dashboard.edit_cat',[
            'cat'=>$cat
        ]);

    }

public function update($id , Request $request)
    {
        $cat = Cat::findOrFail($id);
        if($request->hasFile('img')){
            Storage::delete($cat->img);
            $img_path = Storage::putFile('category',$request->img);

        }

        $img_path = $cat->img;

        $cat->update([
            'name' =>$request->cat_name,
            'img' =>$img_path,
        ]);
    return redirect(url('cats'));


    }
    public function show(){
        $cats = Cat::all();
        return view('dashboard.cats',[
            'cats'=>$cats
        ]);
    }


    public function cat_delete($id){
        $cat = Cat::findOrFail($id);
        Storage::delete($cat->img);
        $cat->delete();
        return redirect(url('cats'));

    }

    public function search_cat(Request $request){
        $name = $request->search;
        $cats = Cat::where('name','like',"%$name%")->get();
        return view('dashboard.cats',[
            'cats' => $cats,
            'name'=>$name

        ]);

    }

}
