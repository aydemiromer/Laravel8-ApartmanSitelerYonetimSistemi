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
                    <form role="form" action="{{route('admin_content_store')}}" method="post">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Content</label>

                                <select class="form-control" name="menu_id">

                                    @foreach($datalist as $rs)
                                    <option value="{{$rs -> id}}">{{$rs -> title}}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" id="exampleInputPassword1" >
                            </div>
                            <div class="form-group">
                                <label>Keywords</label>
                                <input type="text" name="keywords" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" name="description" class="form-control" id="exampleInputPassword1" >
                            </div>

                            <div class="form-group">
                                <label>MenuId</label>
                                <input type="number" name="menu_id" class="form-control" id="exampleInputPassword1" >
                            </div>
                            <div class="form-group">
                                <label>Detail</label>
                                <input type="text" name="detail" class="form-control" id="exampleInputPassword1" >
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input type="number" name="price" class="form-control" id="exampleInputPassword1" >
                            </div>
                            <div class="form-group">
                                <label>Tax</label>
                                <input type="number" name="tax" class="form-control" id="exampleInputPassword1" >
                            </div>
                            <div class="form-group">
                                <label>Type</label>
                                <input type="text" name="type" class="form-control" id="exampleInputPassword1" >
                            </div>
                            <div class="form-group">
                                <label>User</label>
                                <input type="number" name="user" class="form-control" id="exampleInputPassword1" >
                            </div>

                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option selected="selected">False</option>
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
                            <button type="submit" class="btn btn-primary">Add Menu</button>
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
