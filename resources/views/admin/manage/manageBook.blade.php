@extends('.admin/base')
@section('content')
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-2">
                <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary px-1 py-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Book category's
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"> Book's category</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table">
                                            <tr>
                                                <th>Id</th>
                                                <th>category title</th>
                                                <th>category discription</th>
                                            </tr>
                                            @foreach ($categorys as $item)
                                                <tr>
                                                    <td>{{$item->id}}</td>
                                                    {{-- <td>{{$item->book->book_name ?? ''}}</td> --}}
                                                    <td>{{$item->cat_title}}</td>
                                                    <td>{{$item->cat_description}}</td>
                                                </tr>
                                            @endforeach
                                        </table>
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
        </div>
        <div class="row">
            {{-- <div class="col-2"></div> --}}
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Id</th>
                                <th>Book name</th>
                                <th>Book category</th>
                                <th>Book cover</th>
                                <th>Book Image</th>
                                <th>About</th>
                                <th>Auther</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($books as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->book_name}}</td>
                                    <td>{{$item->book->cat_title}}</td>
                                    <td><img src="{{asset("book_cover_images/".$item->book_cover_images)}}" class="img-responsive" style="max-height:100px; max-width:100px" alt="" srcset=""></td>
                                    <td><img src="{{asset("images/".$item->image)}}" class="img-responsive" style="max-height:100px; max-width:100px" alt="" srcset=""></td>
                                    <td>{{$item->about_book}}</td>
                                    <td>{{$item->auther_name}}</td>
                                    <td>
                                        <form action="{{route('admin.book.delete',['id'=>$item->id])}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" value="X" class="btn btn-danger">
                                        </form>
                                        <a href="" class="btn btn-warning text-small p-1"><i class="bi bi-pen"></i></a>
                                        <a href="" class="btn btn-info text-small p-1"><i class="bi bi-eye"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>    
            </div>
        </div>
    </div>
@endsection