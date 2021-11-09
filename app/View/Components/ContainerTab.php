<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ContainerTab extends Component
{
    public $title = '';
    public $tabsTitle = '';

    public function __construct($title, $tabsTitle)
    {
        $this->title = $title;
        $this->tabsTitle = $tabsTitle;
    }

    public function getId()
    {
        echo '<script>';
        echo 'console.log(' . json_encode('ehke') . ')';
        echo '</script>';
    }

    public function render()
    {
        return view('components.container-tab');
    }
}
