<?php

namespace App\Http\Controllers;

use App\Models\Tuwitter;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TuwitController extends Controller
{

    public function show(Tuwitter $id){
        return view("tuwit.show", [
            "tuwits"=> $id
        ]);
    }

    public function store(){

        request()->validate([
            "content"=> "required|min:5|max:240"
            ]);
        
        $tuwit = Tuwitter::create([
            "content" => request()->get("content", null),
        ]);
        
        return redirect()->route("dashboard")->with("success","Tuwit created successfully!");
    }

    public function destroy($id){
        Tuwitter::where("id", $id)->delete();
        return redirect()->route("dashboard")->with("success","Tuwit deleted successfully!");
    }

    public function edit(Tuwitter $id){
        $editing = true;
        return view("tuwit.show", [
            "tuwits"=> $id, "editing"=>$editing
        ]);
    }

    public function update(Tuwitter $id){

        request()->validate([
            "content"=> "required|min:5|max:240"
            ]);
        
        $id->content = request()->get("content", "");
        $id->save();

        return redirect()->route("tuwit.show", $id->id)->with("success","Tuwit edited successfully!");
    }
}