@extends('.admin/base')
@section('content')
        <div class="container">
            <div class="row">
                <div class="col mt-5">
                    <div class="card">
                        <div class="text-center text-danger card-header fs-3">Total Payment</div>
                        <div class="card-body">
                            {{-- <table class="table">
                                <tr>
                                    <th>id:</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Join month</th>
                                    <th>Current month</th>
                                    <th>Pass action</th>
                                </tr>
                            </table> --}}
                            <table class="table">
                                <tr>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>Amount</th>
                                    <th>Due Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($due_payment as $due)
                                    <tr>
                                        <td>{{$due->id}}</td>
                                        <td>{{$due->pass->name}}</td>
                                        <td>{{$due->amount}}</td>
                                        <td>{{$due->due_date}}</td>
                                        <td><span class="badge bg-danger rounded-pill">{{$due->status}}</span></td>
                                        {{-- <td><a href="{{route('admin.make.cashpayment',['std_id'=>$due->student_id,'id'=>$due->id])}}" class="btn btn-success">Pay</a></td> --}}
                                        <td><a href="" class="btn btn-success">Pay</a></td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection