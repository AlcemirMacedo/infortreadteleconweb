<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Banner extends Component
{
    public $titulo;
    public $background;
    /**
     * Create a new component instance.
     */
    public function __construct($titulo = null, $background = null)
    {
        $this->titulo = $titulo;
        $this->background = $background;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.banner');
    }
}
