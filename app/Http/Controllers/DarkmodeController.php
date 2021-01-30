<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DarkmodeController extends Controller
{
    public function changecolor($color,$bgcolor){
        return redirect()->route('main')->with('color',$color)->with('bgcolor',$bgcolor);
    }

}
