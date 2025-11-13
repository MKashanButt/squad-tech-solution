<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AppLayout extends Component
{
    public $pageTitle;
    public $pageDescription;
    public $pageKeywords;
    /**
     * Create a new component instance.
     */
    public function __construct($pageTitle = '', $pageDescription = '', $pageKeywords = '')
    {
        $this->pageTitle = $pageTitle;
        $this->pageDescription = $pageDescription;
        $this->pageKeywords = $pageKeywords;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.app');
    }
}
