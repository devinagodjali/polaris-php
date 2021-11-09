<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HomeJourney extends Component
{
    public function __construct()
    {
        $this->year = 0;
    }

    public function render()
    {
        return view('components.home-journey');
    }
}
