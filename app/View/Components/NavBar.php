<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavBar extends Component
{
    public $menu = "";

    public function __construct($menu)
    {
        $this->menu = $menu ?? '';
    }

    public function render()
    {
        return view('components.nav-bar');
    }
}
