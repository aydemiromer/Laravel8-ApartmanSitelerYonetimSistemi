@extends('layouts.admin')

@section('title', 'Admin Panel HomePage')
@section('javascript')

    <script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

@endsection

@section('content')

    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>User edit</h2>
                </div>
            </div>
            <!-- /. ROW  -->
            <hr />

                    <!-- form start -->
                    <form role="form" action="{{route('admin_user_update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" value="{{$data->name}}"  >
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" value="{{$data->email}}">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="number" name="phone" class="form-control"  value="{{$data->phone}}">
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" value="{{$data->address}}" >
                            </div>

                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control" >

                                @if ($data->profile_photo_path)
                                    <img src="{{Storage::url($data->profile_photo_path)}}" height="100" style="border-radius: 10px" alt="">
                                @endif

                            </div>

                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Update Menu</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /. ROW  -->
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->


@endsection
