<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Error extends Component
{
    public $a;
    public $b;
    /**
     * Create a new component instance.
     */
    public function __construct($type, $message)
    {
        $this->a = $type;
        $this->b = $message;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.error');
    }
}