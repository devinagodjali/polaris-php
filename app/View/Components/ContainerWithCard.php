<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ContainerWithCard extends Component
{
    public $imgSrc;
    public $imgContent;
    public $imgTitle;

    public function __construct($imgSrc, $imgContent, $imgTitle)
    {
        $this->imgSrc = $imgSrc;
        $this->imgTitle = $imgTitle;
        $this->imgContent = $imgContent;
    }

    public function render()
    {
        return view('components.container-with-card');
    }
}
