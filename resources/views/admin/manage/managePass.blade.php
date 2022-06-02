@extends('.admin/base')
@section('content')
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-6"><p class="fs-3">Manage <span class="text-primary border-bottom border-5">{{$title}}</span> Pass</p></div>
            <div class="col-6 mb-3 small">
                <a href="{{route('admin.manage.approvePass')}}" class="btn btn-success">Approved Pass</a>
                <a href="{{route('admin.manage.newPass')}}" class="btn btn-warning">New Pass</a>
                <a href="{{route('admin.manage.expirePass')}}" class="btn btn-danger">Expired Pass</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card ">
                    <div class="card-body p-0">
                        <table class="table small">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Father name</th>
                                <th>Phone number</th>
                                <th>email</th>
                                <th>address</th>
                                <th>gender</th>
                                <th>dob</th>
                                <th>Id Image</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($passs as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->father_name}}</td>
                                    <td>{{$item->phone_number}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->address}}</td>
                                    <td>{{$item->gender}}</td>
                                    <td>{{$item->dob}}</td>
                                    <td><img src="{{asset("pass_image/".$item->p_image)}}" class="img-responsive rounded-circle" style="max-height:100px; max-width:100px" alt="" srcset=""></td>
                                    <td>
                                        @if ($item->status == 0)
                                        <a href="{{route('admin.approvePass',['id'=>$item->id])}}" class="btn btn-warning text-small p-1"><i class="bi bi-person-check-fill"></i></a>
                                        @endif
                                        @if ($item->sattus !== -1)
                                        <a href="{{route('admin.expirePass',['id'=>$item->id])}}" class="btn btn-danger text-small p-1"><i class="bi bi-trash-fill"></i></a>
                                        @endif
                                        <a href="" class="btn btn-info text-small p-1"><i class="bi bi-eye-fill"></i></a>
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