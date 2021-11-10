<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavBar extends Component
{
    public $menu = "";

    public function __construct($menu)
    {
        $this->menu = $menu ?? '';
        $this->navBarMenu = ["About", "Service", "Product"];
    }

    public function render()
    {
        return view('components.nav-bar');
    }
}
