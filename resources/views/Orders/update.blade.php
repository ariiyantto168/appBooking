<section class="content-header">
    <h1>
        Orders
        <small>Update</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i>Home</a>
        <li class="active"><i class="fa fa-database"></i>Mater</a>
        <li><a href="{{url('/orders')}}"><i class="fa fa-cubes"></i>Orders</a>
        <li class="active"><i class="fa fa-plus"></i>Update</a>
    </ol>
</section>

<!-- {{-- main content --}} -->
<section>

    <!-- {{-- default box --}} -->
    <section class="content">

            <!-- Default box -->
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Create New</h3> 
              </div>
              <div class="box-body">
                {{ Form::open(array('url' => 'orders/update/'. $orders->idorders, 'class' => 'form-horizontal')) }}
                <div class="form-group">
                  <label class="col-sm-2 control-label">Name</label>
                  <div class="col-sm-5">
                    <!-- {{-- name:name untuk melempar controller ke database --}} -->
                    <input type="text" class="form-control" name="name" value="{{$orders->name}}" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Harga</label>
                  <div class="col-sm-5">
                    <!-- {{-- name:name untuk melempar controller ke database --}} -->
                    <input type="text" class="form-control" value="{{$orders->harga}}" name="harga" required>
                  </div>
                </div>

                <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Alamat<span class="required">*</span>
                        </label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                        <textarea name="alamat" rows="3"  class="form-control" required>{{$orders->alamat}}</textarea>
                        </div>
                </div>

                <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Description<span class="required">*</span>
                        </label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                        <textarea name="description" rows="3"  class="form-control" required>{{$orders->description}}</textarea>
                        </div>
                </div>

                <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Status<span class="required">*</span>
                        </label>
                        <div class="checkbox">
                            <label>
                              <input type="checkbox" name="active" checked> Active
                            </label>
                          </div>
                        </div>
                    </div>

                <hr>
                <div class="form-group">
                  <label class="col-sm-2 control-label"></label>
                  <div class="col-sm-5">
                    <a href="{{url('orders')}}" class="btn btn-warning pull-right">Back</a>
                    <input type="submit" value="Save" class="btn btn-primary">
                  </div>
                </div>
                {{ Form::close() }}
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          
          </section>
            {{-- <script type="text/javascript">
            $(document).ready(function() {
             $('.datepicker').datepicker();
            });
          </script> --}}
          



