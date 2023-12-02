<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        return view('admin.dashboard');
    }

    public static function card()
    {
        return [
            [
                'title' => 'Earnings (Monthly)',
                'color' => 'primary',
                'icon' => 'fas fa-calendar',
                'content' => '$40,000'
            ],
            [
                'title' => 'Earnings (Annual)',
                'color' => 'success',
                'icon' => 'fas fa-dollar-sign',
                'content' => '$215,000'
            ],
            [
                'title' => 'Earnings (Monthly)',
                'color' => 'info',
                'icon' => 'fas fa-clipboard-list',
                'content' => '$40,000'
            ],
            [
                'title' => 'Pending Requests',
                'color' => 'warning',
                'icon' => 'fas fa-comments',
                'content' => '18'
            ],
        ];
    }

    public static function sidebar()
    {
        return [
            [
                'title' => 'Dashboard',
                'icon' => 'fas fa-fw fa-tachometer-alt',
                'route' => 'dashboard',
                'class' => '',
            ],
            [
                'title' => 'Products',
                'icon' => 'fas fa-fw fa-boxes',
                'route' => 'products.index',
                'class' => '',
            ],
            [
                'title' => 'Blog',
                'icon' => 'fas fa-fw fa-newspaper',
                'route' => 'posts.index',
                'class' => '',
            ],
        ];
    }
}
