<?php

namespace App\View\Components\Admin;

use App\Http\Controllers\Admin\DashboardController;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $cards;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->cards = DashboardController::card();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.card');
    }
}
