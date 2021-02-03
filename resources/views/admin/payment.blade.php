@extends('layouts.admin')

@section('title', 'Admin Panel Payment')

@section('content')

    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>PAYMENTS</h2>
                </div>
            </div>
            <!-- /. ROW  -->
            <hr />
            <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                <thead>
                <tr>
                    <th rowspan="1" colspan="1">Id</th>
                    <th rowspan="1" colspan="1">User Name</th>
                    <th rowspan="1" colspan="1">Month</th>
                    <th rowspan="1" colspan="1">Year</th>
                    <th rowspan="1" colspan="1">Location</th>
                    <th rowspan="1" colspan="1">FlatNumber</th>

                    <th rowspan="1" colspan="1">Price</th>
                    <th rowspan="1" colspan="1">AdminNote</th>
                    <th rowspan="1" colspan="1">Date</th>
                    <th rowspan="1" colspan="1">Status</th>
                    <th rowspan="1" colspan="1">Edit</th>
                </tr>
                </thead>
                <tbody>
                @foreach($datalist as $rs)
                    <p></p>
                    <tr class="gradeU odd">
                        <td class="">{{$rs -> id}}</td>
                        <td class="">{{$rs ->user->name}}</td>
                        <td class="sorting_1">{{$rs -> month}}</td>
                        <td class="sorting_1">{{$rs -> year}}</td>
                        <td class=" ">{{$rs -> location}}</td>
                        <td class=" ">{{$rs -> flatnumber}}</td>
                        <td class=" ">{{$rs -> payment}}</td>
                        <td class=" ">{{$rs -> adminnote}}</td>
                        <td class="sorting_1">{{$rs -> created_at}}</td>
                        <td class=" ">{{$rs -> status}}</td>
                        <td class="center "><a href="{{route('admin_payment_edit', ['id' => $rs->id])}}"  onclick="return !window.open(this.href,'','top=50 left=100 width=1100, height=700')">
                                <img src="{{asset('assets')}}/admin/assets/images/edit.png" height="30"></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <!-- /. ROW  -->
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->


@endsection
