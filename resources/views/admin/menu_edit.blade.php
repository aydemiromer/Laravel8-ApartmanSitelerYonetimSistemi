@extends('layouts.admin')

@section('title', 'Admin Panel HomePage')

@section('content')

    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Menu Add</h2>
                </div>
            </div>
            <!-- /. ROW  -->
            <hr />

                    <!-- form start -->
                    <form role="form" action="{{route('admin_menu_update', ['id'=>$data->id])}}" method="post">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Parent</label>
                                <select class="form-control" name="parent_id">

                                    <option value="0" >Main Menu</option>
                                    @foreach($datalist as $rs)
                                    <option value="{{$rs -> id}}" @if ($rs->id==$data->parent_id) selected="selected" @endif>{{$rs -> title}}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" value="{{$data->title}}" >
                            </div>
                            <div class="form-group">
                                <label>Keywords</label>
                                <input type="text" name="keywords" class="form-control" value="{{$data->keywords}}" >
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" name="description" class="form-control" value="{{$data->description}}"  >
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status" >
                                    <option selected="selected">{{$data->status}}</option>
                                    <option >False</option>
                                    <option>True</option>
                                </select>
                            </div>
                            {{--<div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <input type="file" id="exampleInputFile">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>--}}
                        </div><!-- /.box-body -->

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
