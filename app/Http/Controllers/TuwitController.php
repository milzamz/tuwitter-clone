<?php

namespace App\Http\Controllers;

use App\Models\Tuwitter;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TuwitController extends Controller
{
    public function store(){

        request()->validate([
            "tuwit"=> "required|min:5|max:240"
            ]);
        
        $tuwit = Tuwitter::create([
            "content" => request()->get("tuwit", null),
        ]);
        
        return redirect()->route("dashboard")->with("success","Tuwit created successfully!");
    }
}
