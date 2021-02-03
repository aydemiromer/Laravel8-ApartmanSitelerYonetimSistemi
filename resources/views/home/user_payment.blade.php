@extends('layouts.home')
@section('title','User Profile')
@section('content')
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div id="aside" class="col-md-2">
                    @include('home.usermenu')
                </div>
                <div id="aside" class="col-md-10">
                <div class="panel-body">
                    <div class="table-responsive">
                        <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                            <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                                <thead>
                                <tr>
                                    <th rowspan="1" colspan="1">Id</th>
                                    <th rowspan="1" colspan="1">Month</th>
                                    <th rowspan="1" colspan="1">Year</th>
                                    <th rowspan="1" colspan="1">Location</th>
                                    <th rowspan="1" colspan="1">FlatNumber</th>
                                    <th rowspan="1" colspan="1">Price</th>
                                    <th rowspan="1" colspan="1">Date</th>
                                    <th rowspan="1" colspan="1">Status</th>

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($datalist as $rs)
                                    <p></p>

                                    <tr class="gradeU odd">
                                        <td class="">{{$rs -> id}}</td>
                                        <td class="sorting_1">{{$rs -> month}}</td>
                                        <td class="sorting_1">{{$rs -> year}}</td>

                                        <td class=" ">{{$rs -> location}}</td>
                                        <td class=" ">{{$rs -> flatnumber}}</td>
                                        <td class=" ">{{$rs -> payment}}</td>

                                        <td class="sorting_1">{{$rs -> created_at}}</td>
                                        <td class=" ">{{$rs -> status}}</td>
                                       {{-- <td class="center "><a href="{{route('admin_content_edit', ['id' => $rs->id])}}">
                                                <img src="{{asset('assets')}}/admin/assets/images/edit.png" height="30"></a></td>
--}}
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
