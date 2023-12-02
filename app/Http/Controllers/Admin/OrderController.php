<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.orders.index', [
            'orders' => Order::all()
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.orders.show', [
            'order' => Order::findOrFail($id)
        ]);
    }

    public function update_status(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
}
