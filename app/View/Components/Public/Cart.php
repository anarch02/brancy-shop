<?php

namespace App\View\Components\Public;

use App\Http\Controllers\Public\CartController;
use Closure;
use App\Models\Cart as CartModel;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Cart extends Component
{
    public $products;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->products = CartModel::where('user_id', auth()->id())->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.public.cart');
    }
}
