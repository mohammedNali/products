@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1 class="m-5">PHP Laravel Products Project</h1>
                <div class="text-left"><a href="products/create" class="btn btn-outline-primary">Add Product</a></div>
                <table class="table mt-3 text-left">
                    <thead>
                        <tr>
                            <th scope="col">{{ __('Product Title') }}</th>
                            <th scope="col">Product Price</th>
                            <th scope="col">Short Notes</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{!! $product->title !!}</td>
                                <td class="pr-5 text-right">{!! $product->price !!}</td>
                                <td>{!! $product->short_notes !!}</td>
                                <td><a href="products/{!! $product->id !!}/edit"
                                       class="btn btn-outline-primary">Edit</a>
                                    <button type="button" class="btn btn-outline-danger ml-1"
                                            onClick='showModel({!! $product->id !!})'>Delete</button></td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>


    <div class="modal fade" id="deleteConfirmationModel" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">Are you sure to delete this record?</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" onClick="dismissModel()">Cancel</button>
                    <form id="delete-frm" class="" action="" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showModel(id) {
            var frmDelete = document.getElementById("delete-frm");
            frmDelete.action = 'products/'+id;
            var confirmationModal = document.getElementById("deleteConfirmationModel");
            confirmationModal.style.display = 'block';
            confirmationModal.classList.remove('fade');
            confirmationModal.classList.add('show');
        }

        function dismissModel() {
            var confirmationModal = document.getElementById("deleteConfirmationModel");
            confirmationModal.style.display = 'none';
            confirmationModal.classList.remove('show');
            confirmationModal.classList.add('fade');
        }
    </script>
@endsection

