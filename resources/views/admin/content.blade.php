@extends('layouts.admin')

@section('title', 'Content')

@section('content')

    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>CONTENTS</h2>

                </div>
            </div>
            <div class="col-md-12">
                <div class="card-header">
                    <a class="btn btn-block btn-info" type="button" style="width:200px" href="{{route('admin_content_add')}}">Add</a>
                </div>
            </div>
            <hr />
            <div class="panel-body">
                <div class="table-responsive">
                    <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid">

                        <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                            <thead>
                            <tr>
                                <th rowspan="1" colspan="1">Id</th>
                                <th rowspan="1" colspan="1">Menu</th>
                                <th rowspan="1" colspan="1">Title</th>
                                <th rowspan="1" colspan="1">Price</th>
                                <th rowspan="1" colspan="1">Image</th>
                                <th rowspan="1" colspan="1">Image Gallery</th>
                                <th rowspan="1" colspan="1">Tax</th>
                                <th rowspan="1" colspan="1">Status</th>
                                <th rowspan="1" colspan="1">Edit</th>
                                <th rowspan="1" colspan="1">Delete</th></tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as $rs)
                                <p></p>

                                <tr class="gradeU odd">
                                    <td class="">{{$rs -> id}}</td>
                                    <td>
                                        {{\App\Http\Controllers\Admin\MenuController::getParentsTree($rs->menu,$rs->menu->title) }}
                                    </td>
                                    <td class="sorting_1">{{$rs -> title}}</td>
                                   {{-- <td class="sorting_1">{{$rs -> title}}</td>--}}
                                    <td class="sorting_1">{{$rs -> price}}</td>


                                    <td>
                                        @if ($rs->image)
                                            <img src="{{Storage::url($rs->image)}}" height="100" >
                                        @endif
                                    </td>
                                    <td><a href="{{route('admin_image_add',['content_id' => $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100, height=700')">
                                            <img src="{{asset('assets')}}/admin/assets/images/landscape.png" height="30">
                                        </a></td>



                                    <td class="sorting_1">{{$rs -> tax}}</td>




                                    <td class=" ">{{$rs -> status}}</td>
                                    <td class="center "><a href="{{route('admin_content_edit', ['id' => $rs->id])}}">
                                            <img src="{{asset('assets')}}/admin/assets/images/edit.png" height="30"></a></td>
                                    <td class="center ">
                                        <a href="{{route('admin_content_delete', ['id' => $rs->id])}}" onclick="return confirm('are you want to delete?')">
                                            <img src="{{asset('assets')}}/admin/assets/images/delete.png" height="30"></a></td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
            <!-- /. ROW  -->
            <hr />
            <div class="card-body">

            </div>
            <!-- /. ROW  -->
        </div>
        <!-- /. PAGE INNER  -->
    </div>
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
