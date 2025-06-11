<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BotVenda extends Component
{

    public $link;
    public $sistema;
    /**
     * Create a new component instance.
     */
    public function __construct($link = null, $sistema = null)
    {
        $this->link = $link;
        $this->sistema = $sistema;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.bot-venda');
    }
}
