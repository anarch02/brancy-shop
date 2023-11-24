<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = [
            'code', 
            'name', 
            'price', 
        ];

        // dd(Product::all());
        return view('admin.table', [
            'title' => 'Products',
            'table' => $table,
            'object' => Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Add Product',
            'object' => new Product,
            'url' => 'admin/products',
            'method' => 'POST',
            'inputs' => [
                [
                    'name' => 'code',
                    'type' => 'text',
                    'value' => '',
                    'placeholder' => 'Code',
                    'required' => true,
                    'class' => 'form-control'
                ],
                [
                    'name' => 'name',
                    'type' => 'text',
                    'value' => '',
                    'placeholder' => 'Name',
                    'required' => true,
                    'class' => 'form-control'
                ],
                [
                    'name' => 'price',
                    'type' => 'number',
                    'value' => '',
                    'placeholder' => 'Price',
                    'required' => true,
                    'class' => 'form-control'
                ]
            ]
        ];
        return response()->json($data);
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
