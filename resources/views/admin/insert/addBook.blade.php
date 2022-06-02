@extends('.admin/base')
@section('content')
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-10">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Add  book category's
                                    </button>
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Book's category</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <form action="/admin/cat" method="post" >
                                                            @csrf
                                                            <div class="mb-3">
                                                                <label for="">Category Title</label>
                                                                <input type="text" name="cat_title" class="form-control @error ('cat_title') is valaid @enderror" value="{{old('cat_title')}}">
                                                                @error('cat_title')
                                                                    <p class="text-danger small">{{$message}}</p>
                                                                @enderror
                                                            </div> 
                                                            <div class="mb-3">
                                                                <label for="">Category Discription</label>
                                                                <input type="text" name="cat_description" class="form-control @error ('cat_description') is valaid @enderror" value="{{old('cat_description')}}">
                                                                @error('cat_description')
                                                                    <p class="text-danger small">{{$message}}</p>
                                                                @enderror
                                                            </div> 
                                                            <input type="submit" class="btn btn-success">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                            </div>
{{-- ---------------------------------------------insert book--------------------------------------------- --}}
                            <div class="col-10">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-body">
                                            <h4>Insert Books</h4>
                                            <form action="" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="">Book Name</label>
                                                    <input type="text" name="book_name" class="form-control @error ('book_name') is valaid @enderror" value="{{old('book_name')}}">
                                                    @error('book_name')
                                                        <p class="text-danger small">{{$message}}</p>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label for="">Book Category</label>
                                                    <input type="text" name="cat_title" class="form-control @error ('cat_title') is valaid @enderror" value="{{old('cat_title')}}">
                                                    @error('cat_title')
                                                        <p class="text-danger small">{{$message}}</p>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label for="">Book Category</label>
                                                    <select name="category_id" id="" class="form-select">
                                                        @foreach ($category as $item)
                                                            <option value="{{$item->id}}">{{$item->cat_title}}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('category_id')
                                                        <p class="text-danger small">{{$message}}</p>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label for="">Book cover</label>
                                                    <input type="file" id="input-file-now-custom-3" name="book_cover_images" class="form-control @error ('book_cover_images') is valaid @enderror" value="{{old('book_cover_images')}}">
                                                    @error('book_cover_images')
                                                        <p class="text-danger small">{{$message}}</p>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label for="">Book images</label>
                                                    <input type="file" id="input-file-now-custom-3" name="images[]" multiple class="form-control ">
                                                    @error('image')
                                                        <p class="text-danger small">{{$message}}</p>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label for="">About book</label>
                                                    <input type="text" name="about_book" class="form-control @error ('about_book') is valaid @enderror" value="{{old('about_book')}}">
                                                    @error('about_book')
                                                        <p class="text-danger small">{{$message}}</p>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label for="">Auther name </label>
                                                    <input type="text" name="auther_name" class="form-control @error ('auther_name') is valaid @enderror" value="{{old('auther_name')}}">
                                                    @error('auther_name')
                                                        <p class="text-danger small">{{$message}}</p>
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
                </div>
            </div>
        </div>
    </div>
@endsection