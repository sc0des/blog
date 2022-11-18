<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Footer extends Component
{
    public array $footers;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->footers = config('writeups.footers');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.footer');
    }
}
