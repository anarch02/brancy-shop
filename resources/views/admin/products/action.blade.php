@extends('layouts.admin')


@section('content')
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800"> {{__("Action")}} </h1>
    
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <form action="{{isset($product)? route('products.update', $product->id) : route('products.store')}}" 
                                    method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="mb-2">
                                                <label for="code">Products code</label>
                                                <input type="text" name="code" @isset($product)
                                                    value="{{$product->code}}"
                                                @endisset placeholder="code" class="form-control">
                                            </div>

                                            <div class="mb-2">
                                                <label for="name">Products name</label>
                                                <input type="text" name="name" @isset($product)
                                                    value="{{$product->name}}"
                                                @endisset placeholder="Name" class="form-control">
                                            </div>

                                            <div class="mb-2">
                                                <label for="category_id">Category</label>
                                                <select name="category_id" id="category_id" class="form-select">
                                                    <option disabled>Choose category</option>
                                                    @foreach ($categories as $category)
                                                        <option @if (isset($product) && $product->category_id == $category->id)
                                                            selected
                                                        @endif value="{{$category->id}}"> {{$category->name}} </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="mb-2">
                                                <label for="description">Description</label>
                                                <textarea name="description" id="description" cols="30" class="form-control" rows="10">@isset($product){{$product->description}}
                                                    @endisset
                                                </textarea>
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="card">
                                                <div class="card-header">
                                                    <input type="file" name="thumbnail" class="form-control">
                                                </div>
                                                <div class="card-body">
                                                    <img src="{{isset($product)? asset('storage/products/'.$product->image) : asset('assets/images/shop/1.webp')}}" style="max-width: 300px" alt="">
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 justify-content-center">
                                        <button type="submit" class="btn btn-primary">
                                            {{isset($product)? "Update" : "Save"}}
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
    
                    </div>
                    <!-- /.container-fluid -->


                    <!-- Modal -->
                    <div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form id="modalForm">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="modalLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div id="modalBody" class="modal-body">
                                        <!-- ... -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Understood</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

@endsection