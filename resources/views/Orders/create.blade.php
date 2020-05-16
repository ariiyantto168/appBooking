<section class="content-header">
    <h1>
        Orders
        <small>Create New</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i>Home</a>
        <li class="active"><i class="fa fa-database"></i>Mater</a>
        <li><a href="{{url('/tipe')}}"><i class="fa fa-cubes"></i>Orders</a>
        <li class="active"><i class="fa fa-plus"></i>Create New</a>
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
                {{ Form::open(array('url' => 'orders/create-new', 'class' => 'form-horizontal')) }}
                <div class="form-group">
                  <label class="col-sm-2 control-label">Name</label>
                  <div class="col-sm-5">
                    <!-- {{-- name:name untuk melempar controller ke database --}} -->
                    <input type="text" class="form-control" placeholder="Name" name="name" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Harga</label>
                  <div class="col-sm-5">
                    <!-- {{-- name:name untuk melempar controller ke database --}} -->
                    <input type="text" class="form-control" placeholder="Masukan Harga" name="harga" required>
                  </div>
                </div>

                <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Alamat<span class="required">*</span>
                        </label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                        <textarea name="alamat" rows="3"  class="form-control" required></textarea>
                        </div>
                </div>

                <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Description<span class="required">*</span>
                        </label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                        <textarea name="description" rows="3"  class="form-control" required></textarea>
                        </div>
                </div>

                <div class="form-group control-group increment">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Images<span class="required"></span>
                        </label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                          <input type="file" id="images" name="images" class="form-control col-md-7 col-xs-12">
                          <small class="text-danger">size image max height:1000, width:1000 pixel</small>
                        </div>
                        <div class="input-group-btn"> 
                            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                        </div>
                </div>


                <!-- add pages images -->
                <div class="clone hide">
                    <div class="form-group control-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Images<span class="required"></span>
                            </label>
                            <div class="col-md-5 col-sm-5 col-xs-12">
                              <input type="file" id="images" name="images" class="form-control col-md-7 col-xs-12">
                              <small class="text-danger">size image max height:1000, width:1000 pixel</small>
                            </div>
                            <div class="input-group-btn"> 
                                <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                            </div>
                    </div>
                </div>
                <!-- add pages images -->

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
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>


            <script type="text/javascript">
                $(document).ready(function() {
                  $(".btn-success").click(function(){ 
                      var html = $(".clone").html();
                      $(".increment").after(html);
                  });
                  $("body").on("click",".btn-danger",function(){ 
                      $(this).parents(".control-group").remove();
                  });
                });
            </script>

          
          </section>
            {{-- <script type="text/javascript">
            $(document).ready(function() {
             $('.datepicker').datepicker();
            });
          </script> --}}
          



