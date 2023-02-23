@extends('layout') @section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1 class="display-one mt-5">Login to Dashboard</h1>

                <form id="add-frm" method="POST" action="{{ route('admin.login.post') }}" class="border text-center p-3 mt-2">
                    @csrf
                    <div class="control-group col-6 text-left">
                        <label for="email">Email</label>
                        <div>
                            <input type="email" id="email" class="form-control mb-4" name="email"
                                   placeholder="Enter Title" required>
                        </div>
                    </div>
                    <div class="control-group col-6 text-left mt-2">
                        <label for="password">Password</label>
                        <div>
                            <input type="password" id="password" class="form-control mb-4" name="password"
                                   placeholder="Enter Password" required>
                        </div>
                    </div>
                    <div class="control-group col-6 text-left mt-2"><button class="btn btn-primary">Login</button></div>
                </form>
            </div>
        </div>
    </div>
@endsection
