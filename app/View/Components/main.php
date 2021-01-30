<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\AirConditioner;
class main extends Component
{

    public $bg;
    public $color;
    public $secondbg;
    public $airconditioners;
    public function __construct($bg,$color)
    {
        $this->bg = $bg;
        $this->color = $color;
        $this->airconditioners = AirConditioner::all();
        if($bg == "02033B"){
            $this->secondbg = "0d1b2a";
        }
        else{
            $this->secondbg = "f7f7ff";
        }
    }

    public function render()
    {
        return view('components.main');
    }
}
