@extends('layouts.admin')

@section('title', 'Admin Panel HomePage')

@section('content')

    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>REVIEWS</h2>
                </div>
            </div>
            <div class="col-md-12">
            </div>
            <hr />
            <div class="panel-body">
                <div class="table-responsive">
                    <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                        <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                            <thead>
                            <tr>
                                <th rowspan="1" colspan="1">Id</th>
                                <th rowspan="1" colspan="1">Name</th>
                                <th rowspan="1" colspan="1">Content</th>
                                <th rowspan="1" colspan="1">Subject</th>
                                <th rowspan="1" colspan="1">Review</th>
                                <th rowspan="1" colspan="1">Status</th>
                                <th rowspan="1" colspan="1">Date</th>
                                <th rowspan="1" colspan="1">Edit</th>
                                <th rowspan="1" colspan="1">Delete</th></tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as $rs)
                                <p></p>

                                <tr class="gradeU odd">
                                    <td class="">{{$rs -> id}}</td>
                                    <td class="">{{$rs ->user->name}}</td>
                                    <td>
                                        <a href="{{route('content',['id'=> $rs->content->id])}}" target="_blank">{{$rs->content->title}}</a>
                                    </td>
                                    <td class="sorting_1">{{$rs -> subject}}</td>
                                    <td class="sorting_1">{{$rs -> review}}</td>

                                    <td class=" ">{{$rs -> status}}</td>
                                    <td class="sorting_1">{{$rs -> created_at}}</td>


                                    <td class="center "><a href="{{route('admin_review_show', ['id' => $rs->id])}}", onclick="return !window.open(this.href,'','top=50 left=100 width=1100, height=700')">
                                            <img src="{{asset('assets')}}/admin/assets/images/edit.png" height="30"></a></td>
                                    <td class="center ">
                                        <a href="{{route('user_review_delete', ['id' => $rs->id])}}" onclick="return confirm('are you want to delete?')">
                                            <img src="{{asset('assets')}}/admin/assets/images/delete.png" height="30"></a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        <!-- /. PAGE INNER  -->

    <!-- /. PAGE WRAPPER  -->


@endsection
@section('footer')
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>

    <script src="{{asset('assets')}}/table/assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="{{asset('assets')}}/table/assets/plugins/dataTables/dataTables.bootstrap.js"></script>
@endsection
