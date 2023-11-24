@extends('layouts.admin')

@section('scripts')
        <!-- Page level plugins -->
        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    
        <!-- Page level custom scripts -->
        <script src="js/demo/datatables-demo.js"></script>
@endsection

@section('content')
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header d-flex justify-content-between py-3">
                                <h6 class="m-0 font-weight-bold text-primary"> Posts list </h6>
                                <a href="{{route('posts.create')}}" class="btn btn-success">Add new</a>
                                {{-- <button id="openModalButton" class="btn btn-warning" data-url="{{ route('products.create') }}" data-method="GET" data-data="">Add new</button> --}}
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th> Title </th>                                                    
                                                <th> Created at </th>                                                    
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th> Title </th>                                                    
                                                <th> Created at </th>                                                    
                                                <th>Action</th>                                            
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach ($posts as $post)
                                            <tr>
                                                <td>{{ $post->title }}</td>
                                                <td>{{ $post->created_at }}</td>
                                                <td>
                                                    <a href="{{route('posts.show', $post->id)}}" class="btn btn-primary">
                                                        show
                                                    </a>
                                                    <a href="{{route('posts.edit', $post->id)}}" class="btn btn-warning">
                                                        Edit
                                                    </a>
                                                    <a href="{{route('posts.destroy', $post->id)}}" class="btn btn-danger">
                                                        delete
                                                    </a>
                                                </td>
                                            </tr>    
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
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