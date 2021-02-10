<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Admin Dashboard</h2>
            </div>
        </div>

        <!-- /. ROW  -->
        <hr />
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="panel panel-primary text-center no-boder bg-color-blue">
                    <div class="panel-body">
                        <i class="fa fa-bar-chart-o fa-5x"></i>
                        <h3>MENU </h3>
                    </div>
                    <div class="panel-footer back-footer-green">
                        <a href="{{route('admin_menu')}}"> Click Here</a>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="alert alert-info text-center">
                    <i class="fa fa-desktop fa-5x"></i>
                        <h3>CONTENTS </h3>
                    <div class="panel-footer back-footer-green">
                        <a href="{{route('admin_content')}}"> Click Here</a>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="panel panel-primary text-center no-boder bg-color-blue">
                    <div class="panel-body">
                        <i class="fa fa-comments fa-3x"></i>
                        <h3>CONTACT MESSAGE </h3>
                    </div>
                    <div class="panel-footer back-footer-green">
                        <a href="{{route('admin_message')}}"> Click Here</a>

                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="alert alert-info text-center">
                    <i class="fa fa-comment fa-5x"></i>
                    <h3>COMMENTS </h3>
                    <div class="panel-footer back-footer-green">
                        <a href="{{route('admin_review')}}"> Click Here</a>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="alert alert-info text-center">
                    <i class="fa fa-question fa-5x"></i>
                    <h3>FAQ </h3>
                    <div class="panel-footer back-footer-green">
                        <a href="{{route('admin_faq')}}"> Click Here</a>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="panel panel-primary text-center no-boder bg-color-blue">
                    <div class="panel-body">
                        <i class="fa fa-users fa-5x"></i>
                        <h3>ROLES </h3>
                    </div>
                    <div class="panel-footer back-footer-green">
                        <a href="{{route('admin_users')}}"> Click Here</a>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="alert alert-info text-center">
                    <i class="fa fa-money fa-5x"></i>
                    <h3>NEW PAYMENTS </h3>
                    <div class="panel-footer back-footer-green">
                        <a href="{{route('admin_payment_list',['status'=>'new'])}}"> Click Here</a>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="panel panel-primary text-center no-boder bg-color-blue">
                    <div class="panel-body">
                        <i class="fa fa-credit-card fa-5x"></i>
                        <h3>PAID PAYMENTS </h3>
                    </div>
                    <div class="panel-footer back-footer-green">
                        <a href="{{route('admin_payment_list',['status'=>'paid'])}}"> Click Here</a>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="panel panel-primary text-center no-boder bg-color-blue">
                    <div class="panel-body">
                        <i class="fa fa-ban fa-5x"></i>
                        <h3>CANCELPAYMENTS </h3>
                    </div>
                    <div class="panel-footer back-footer-green">
                        <a href="{{route('admin_payment_list',['status'=>'canceled'])}}"> Click Here</a>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="alert alert-info text-center">
                    <i class="fa fa-cog fa-5x"></i>
                    <h3>SETTING </h3>
                    <div class="panel-footer back-footer-green">
                        <a href="{{route('admin_setting')}}"> Click Here</a>

                    </div>
                </div>
            </div>







        </div>
    </div>
</div>
           {{-- <div class="col-md-6">
                <h5>Buttons Samples</h5>
                <a href="#" class="btn btn-default">default</a>
                <a href="#" class="btn btn-primary">primary</a>
                <a href="#" class="btn btn-danger">danger</a>
                <a href="#" class="btn btn-success">success</a>
                <a href="#" class="btn btn-info">info</a>
                <a href="#" class="btn btn-warning">warning</a>
                <br />
                <br />
                <h5>Progressbar Samples</h5>
                <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                        <span class="sr-only">40% Complete (success)</span>
                    </div>
                </div>
                <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                        <span class="sr-only">20% Complete</span>
                    </div>
                </div>


            </div>


        </div>
        <!-- /. ROW  -->
        <hr />
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Text Input Example</label>
                    <input class="form-control" />
                    <p class="help-block">Help text here.</p>
                </div>
            </div>
            <div class="col-md-4">
                <label>Click to see blank page</label>
                <a href="blank.html" target="_blank" class="btn btn-danger btn-lg btn-block">BLANK PAGE</a>
            </div>
            <div class="col-md-4">
                For More Examples Please visit official bootstrap website <a href="http://getbootstrap.com" target="_blank">getbootstrap.com</a>
            </div>
        </div>
        <hr />


    </div>
</div>

--}}
