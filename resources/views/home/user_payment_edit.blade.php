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

        <!-- form start -->
        <form role="form" action="{{route('user_payment_update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label>Month</label>
                    <input type="text" name="month" class="form-control" value="{{$data->month}}"  >
                </div>
                <div class="form-group">
                    <label>Year</label>
                    <input type="text" name="year" class="form-control" value="{{$data->year}}">
                </div>
                <div class="form-group">
                    <label>Location</label>
                    <input type="text" name="location" class="form-control"  value="{{$data->location}}">
                </div>

                <div class="form-group">
                    <label>flatnumber</label>
                    <input type="number" name="flatnumber" class="form-control" value="{{$data->flatnumber}}" >
                </div>
                <div class="form-group">
                    <label>adminnote</label>
                    <input type="text" name="adminnote" class="form-control" value="{{$data->adminnote}}" >
                </div>
                <div class="form-group">
                    <label>status</label>
                    <select name="status">
                        <option selected>{{$data->status}}</option>
                    </select>
                </div>


            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update Menu</button>
            </div>
            </div>
        </form>
    </div>
</div>



