<?php

namespace App\Http\Controllers;

use App\Models\Tuwitter;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function index()
    {

        $tuwit = new Tuwitter([
            "content" => "testttttt",
        ]);
        $tuwit->save();

        dump(Tuwitter::all());

        return view("dashboard", [
            "tuwit" => Tuwitter::orderBy('created_at', 'DESC')->get(),
    ]);

    }
}
