<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AdminNavComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public $headText;
    public function __construct($headText)
    {
        $this->headText=$headText;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin-nav-component');
    }
}
