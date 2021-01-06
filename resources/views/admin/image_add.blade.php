<html>
<head>
    <title>Image Gallery</title>
    <link href="{{asset('assets')}}/admin/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{asset('assets')}}/admin/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->

    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>


    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" class="container">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>{{$data->title}}</h2>
                </div>
            </div>
            <!-- /. ROW  -->
            <hr />

                    <!-- form start -->
                    <form role="form" action="{{route('admin_image_store',['content_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf

                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control"  >
                            </div>

                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control"  >

                            </div>




                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Add Menu</button>
                        </div>
                    </form>
            <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                <thead>
                <tr>
                    <th rowspan="1" colspan="1">Id</th>
                    <th rowspan="1" colspan="1">Title</th>
                    <th rowspan="1" colspan="1">Image</th>

                    <th rowspan="1" colspan="1">Delete</th></tr>
                </thead>
                <tbody>
                @foreach($images as $rs)
                    <p></p>

                    <tr class="gradeU odd">
                        <td class="">{{$rs -> id}}</td>
                        <td class="sorting_1">{{$rs -> title}}</td>
                        <td>
                            @if ($rs->image)
                                <img src="{{Storage::url($rs->image)}}" height="100" >
                            @endif
                        </td>

                        <td class="center "><a href="{{route('admin_image_delete', ['id' => $rs->id,'content_id'=>$data->id])}}"
                                               onclick="return confirm('are you want to delete?')"><img src="{{asset('assets')}}/admin/assets/images/delete.png" height="30"></a></td>
                    </tr>
            @endforeach
                </tbody>
            </table>

        </div>
            </div>
            <!-- /. ROW  -->
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->

</body>
</html>


