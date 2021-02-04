<link href="img/favicon.png" rel="icon">
<link href="img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Bootstrap CSS File -->
<link href="{{asset('assets')}}/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Libraries CSS Files -->
<link href="{{asset('assets')}}/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="{{asset('assets')}}/lib/animate/animate.min.css" rel="stylesheet">
<link href="{{asset('assets')}}/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
<link href="{{asset('assets')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

<!-- Main Stylesheet File -->
<link href="{{asset('assets')}}/css/style.css" rel="stylesheet">
<script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>


    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Message edit</h2>
                    @include('home.message')
                </div>
            </div>
            <!-- /. ROW  -->
            <hr />

            <div class="box-body">
                <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                    <tr>
                        <th rowspan="1" colspan="1">Id</th>
                        <td class="">{{$data ->id}}</td>
                    </tr><tr>
                        <th rowspan="1" colspan="1">Name</th>
                        <td class="sorting_1">{{$data -> name}}</td>
                    </tr><tr>
                        <th rowspan="1" colspan="1">Content</th>
                        <td class="sorting_1">{{$data -> email}}</td>
                    </tr><tr>
                        <th rowspan="1" colspan="1">Roles</th>
                        <td class="sorting_1">@foreach($data -> roles as $row)
                                {{$row->name}}
                            @endforeach
                            <a href="{{route('admin_user_role_delete', ['userid' => $data->id,'roleid'=>$row->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100, height=700')">
                                <img src="{{asset('assets')}}/admin/assets/images/delete.png" height="30"></a>

                        </td>
                    </tr>
                    <tr>
                        <th rowspan="1" colspan="1">Add Role</th>
                        <td>
                        <form role="form" action="{{route('admin_user_role_add', ['id' => $data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <select name="roleid">
                                @foreach($datalist as $rs)
                                    <option value="{{$rs->id}}">{{$rs->name}}</option>
                                @endforeach
                            </select>
                            <button type="submit" class="btn btn-success">Add Role</button>
                        </form>
                        </td>
                    </tr>
                    <td></td><td>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Update Review</button>
                        </div>
                    </td>

                </table>
            </div>

            </div>



            </div>
    </div>




