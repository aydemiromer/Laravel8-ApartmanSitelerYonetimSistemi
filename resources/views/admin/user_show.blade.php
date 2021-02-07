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
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">

            <div class="box-body">
                <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                   <tr>
                       <th rowspan="1" colspan="1">Photo</th>
                       <td>
                           @if($data->profile_photo_path)
                               <img src="{{Storage::url($data->profile_photo_path)}}" height="50" style="border-radius: 10px" alt="">
                           @endif

                       </td>
                   </tr>

                    <tr>
                        <th rowspan="1" colspan="1">Id</th>
                        <td class="">{{$data ->id}}</td>
                    </tr><tr>
                        <th rowspan="1" colspan="1">Name</th>
                        <td class="sorting_1">{{$data -> name}}</td>
                    </tr><tr>
                        <th rowspan="1" colspan="1">Email</th>
                        <td class="sorting_1">{{$data -> email}}</td>
                    </tr><tr>
                        <th rowspan="1" colspan="1">Phone</th>
                        <td class="sorting_1">{{$data -> phone}}</td>
                    </tr>
                    <tr>
                        <th rowspan="1" colspan="1">Address</th>
                        <td class="sorting_1">{{$data -> address}}</td>
                    </tr>
                    <tr>
                        <th rowspan="1" colspan="1">Date</th>
                        <td class="sorting_1">{{$data -> created_at}}</td>
                    </tr>
                    <tr>
                        <th rowspan="1" colspan="1">Roles</th>
                        <td class="sorting_1">@foreach($data -> roles as $row)
                                {{$row->name}}
                            @endforeach
                           

                        </td>
                    </tr>

                </table>
            </div>



            </div>
    </div>




