@extends('base')
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-5 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h5>Enter your detale for Login</h5>
                        <form action="" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="mb-3">
                                <input type="submit" name="send" class="btn btn-success w-100">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection