@extends('student/base')
@section('content')
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-10">
                <div class="card">
                    <div class="card-body">
                        <div class="card-body">
                            <h4>Insert Books</h4>
                            <form action="" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control @error ('name') is valaid @enderror" value="{{old('name')}}">
                                    @error('name')
                                        <p class="text-danger-small">{{$massage}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Father name</label>
                                    <input type="text" name="father_name" class="form-control @error ('father_name') is valaid @enderror" value="{{old('father_name')}}">
                                    @error('father_name')
                                        <p class="text-danger-small">{{$massage}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Phone number</label>
                                    <input type="text" name="phone_number" class="form-control @error ('phone_number') is valaid @enderror" value="{{old('phone_number')}}">
                                    @error('phone_number')
                                        <p class="text-danger-small">{{$massage}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">address</label>
                                    <input type="text" name="email" class="form-control @error ('email') is valaid @enderror" value="{{old('email')}}">
                                    @error('email')
                                        <p class="text-danger-small">{{$massage}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Address</label>
                                    <input type="text" name="address" class="form-control @error ('address') is valaid @enderror" value="{{old('address')}}">
                                    @error('address')
                                        <p class="text-danger-small">{{$massage}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Gender</label>
                                    <input type="text" name="gender" class="form-control @error ('gender') is valaid @enderror" value="{{old('gender')}}">
                                    @error('gender')
                                        <p class="text-danger-small">{{$massage}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">DOB</label>
                                    <input type="text" name="dob" class="form-control @error ('dob') is valaid @enderror" value="{{old('dob')}}">
                                    @error('dob')
                                        <p class="text-danger-small">{{$massage}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Id Cover</label>
                                    <input type="file" id="input-file-now-custom-3" name="p_image" class="form-control @error ('p_image') is valaid @enderror" value="{{old('p_image')}}">
                                    @error('p_image')
                                        <p class="text-danger-small">{{$massage}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <input type="submit" name="send" class="btn btn-success w-100 text-dark">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
@endsection