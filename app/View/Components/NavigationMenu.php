<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavigationMenu extends Component
{
    public array $menu;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->menu = config('writeups.menu');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        foreach ($this->menu as $key => $item) {

            $this->menu[$key]['active'] = request()->getRequestUri() === $item['url'];
        }

        return view('components.navigation-menu');

    }
}
