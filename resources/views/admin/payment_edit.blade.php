
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
                    <form role="form" action="{{route('admin_payment_update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">

                              <tr>
                                    <th rowspan="1" colspan="1">Id</th>
                                    <td class="">{{$data->id}}</td>
                                </tr><tr>
                                    <th rowspan="1" colspan="1">User Name</th>
                                    <td class="sorting_1">{{$data ->user-> name}}</td>
                                </tr><tr>
                                    <th rowspan="1" colspan="1">month</th>
                                    <td class="sorting_1">{{$data -> month}}</td>
                                </tr><tr>
                                    <th rowspan="1" colspan="1">year</th>
                                    <td class="sorting_1">{{$data -> year}}</td>
                                </tr><tr>
                                    <th rowspan="1" colspan="1">location</th>
                                    <td class="sorting_1">{{$data -> location}}</td>
                                </tr><tr>
                                    <th rowspan="1" colspan="1">flatnumber</th>
                                    <td class="sorting_1">{{$data ->flatnumber}}</td>
                                </tr><tr>
                                    <th rowspan="1" colspan="1">payment</th>
                                    <td class="sorting_1">{{$data ->payment}}</td>
                                </tr><tr>
                                    <th rowspan="1" colspan="1">Status</th>
                                    <td>
                                    <select name="status">
                                        <option selected>{{$data->status}}</option>
                                        <option>Paid</option>
                                        <option>Canceled</option>
                                    </select>
                                    </td>
                                </tr>


                                <td></td><td>
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Update Payment
                                        </button>
                                    </div>
                                </td>

                            </table>
                        </div>
                    </form>
                  </div>
              </div>



