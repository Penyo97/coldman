<?php

namespace App\View\Components;

use Illuminate\View\Component;

class footer extends Component
{
    public $bg;
    public $color;
    public function __construct($bg,$font)
    {
        $this->bg = $bg;
        $this->color = $font;

    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.footer');
    }
}
