<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContainerWithTabs extends Component
{
    public $containerTitle;
    public $tabsTitle;
    public $content;
    public $menu;

    public function mount($containerTitle, $tabsTitle, $content, $menu)
    {
        $this->containerTitle = $containerTitle;
        $this->tabsTitle = $tabsTitle;
        $this->con = 0;
        $this->content = $content;
        $this->menu = $menu;
    }

    public function getId($tabIndex)
    {
        $this->con = $tabIndex;
    }

    public function render()
    {
        return view('livewire.container-with-tabs');
    }
}
