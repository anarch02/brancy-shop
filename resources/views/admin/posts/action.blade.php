@extends('layouts.admin')


@section('content')
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800"> {{__("Action")}} </h1>
    
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <form action="{{isset($post)? route('posts.update', $post->id) : route('posts.store')}}" 
                                    method="post" enctype="multipart/form-data">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-2">
                                                <label for="title">
                                                    Title
                                                </label>
                                                <input type="text" name="title" @isset($post)
                                                    value="{{$post->title}}"
                                                @endisset class="form-control">
                                            </div>
                                            <div class="mb-2">
                                                <label for="title">
                                                    Image
                                                </label>
                                                <input type="file" name="thumbnail" class="form-control">
                                                <img style="max-height: 300px;" class="m-2 text-center"
                                                 src="{{isset($post)? asset("storage/posts/" . $post->thumbnail) : asset("storage/images/shop/modal1.webp")}}" alt="">
                                            </div>
                                            <div class="mb-2">
                                                <label for="content">
                                                    Content
                                                </label>
                                                <textarea class="form-control" name="content" id="content" cols="30" rows="10">@isset($post) {{$post->content}}                                               
                                                @endisset</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 justify-content-center">
                                        <button type="submit" class="btn btn-primary">
                                            {{isset($post)? "Update" : "Save"}}
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