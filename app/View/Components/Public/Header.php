<?php

namespace App\View\Components\Public;

use App\Models\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    public $categories;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        return $this->categories = Category::get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.public.header');
    }
}
