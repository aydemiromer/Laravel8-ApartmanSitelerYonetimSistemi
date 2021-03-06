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
                    <h2>Menu Add</h2>
                </div>
            </div>
            <!-- /. ROW  -->
            <hr />

                    <!-- form start -->
                    <form role="form" action="{{route('admin_content_store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Menu</label>

                                <select class="form-control" name="menu_id">

                                    @foreach($datalist as $rs)
                                    <option value="{{$rs -> id}}">{{\App\Http\Controllers\Admin\MenuController::getParentsTree($rs,$rs->title) }}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control"  >
                            </div>
                            <div class="form-group">
                                <label>Keywords</label>
                                <input type="text" name="keywords" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" name="description" class="form-control"  >
                            </div>

                            {{--<div class="form-group">
                                <label>MenuId</label>
                                <input type="number" name="menu_id" class="form-control"  >
                            </div>--}}
                            <div class="form-group">
                                <label>Detail</label>
                                <textarea id="detail" name="detail"></textarea>
                                <script>
                                    CKEDITOR.replace( 'detail' );
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input type="number" name="price" class="form-control"  >
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control"  >
                                {{--@if ($rs->image)
                                    <img src="{{Storage::url($rs->image)}}" height="30">
                                @endif--}}
                            </div>
                            <div class="form-group">
                                <label>Tax</label>
                                <input type="number" name="tax" class="form-control"  >
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
