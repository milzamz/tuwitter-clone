<?php

namespace App\Http\Controllers;

use App\Models\Tuwitter;
use Illuminate\Http\Request;

class TuwitController extends Controller
{
    public function store(){
        $tuwit = Tuwitter::create([
            "content" => request()->get("tuwit", ""),
        ]);

        return redirect()->route("dashboard")->with("success","Tuwit created successfully!");
    }
}
