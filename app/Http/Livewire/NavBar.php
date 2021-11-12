<?php

namespace App\Http\Livewire;
use Livewire\Component;

class NavBar extends Component
{
    public $menu = "";

    public function mount($menu)
    {
        $this->menu = $menu ?? '';
        $this->navBarMenu = ["About", "Service", "Product"];
        $this->burgerBar = false;
    }

    public function onClickBurgerBar()
    {
        $this->burgerBar = !$this->burgerBar;
    }

    public function render()
    {
        return view('livewire.nav-bar');
    }
}
