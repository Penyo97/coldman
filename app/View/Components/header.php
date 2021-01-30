<?php

namespace App\View\Components;

use Illuminate\View\Component;

class header extends Component
{

    public $bg;
    public $color;

    public function __construct($bg,$font)
    {
        $this->bg = $bg;
        $this->color = $font;

    }

    public function render()
    {
        return view('components.header');
    }
}
