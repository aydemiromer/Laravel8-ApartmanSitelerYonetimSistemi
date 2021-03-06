@extends('layouts.admin')

@section('title', 'Frequently Asked Question Edit')
@section('javascript')

    <script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

@endsection

@section('content')

    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>FAQ edit</h2>
                </div>
            </div>
            <!-- /. ROW  -->
            <hr />

                    <!-- form start -->
                    <form role="form" action="{{route('admin_faq_update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label>Question</label>
                                <input type="text" name="question" value="{{$data->question}}" class="form-control"  >
                            </div>
                            <div class="form-group">
                                <label>Answer</label>
                                <textarea id="detail" name="answer">{{$data->answer}}</textarea>
                                <script>
                                    CKEDITOR.replace( 'answer' );
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option selected="selected">{{$data->status}}</option>
                                    <option>True</option>
                                </select>
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
