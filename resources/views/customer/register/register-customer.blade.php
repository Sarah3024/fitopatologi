@include('customer/header')
<!-- Full Width Column -->
  <div class="content-wrapper" style="padding-left:100px;padding-right:100px;">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header" style="background-color: #c5e1a5;padding-bottom:20px;">
        <h1>
          Phitopatology
          <small>Information System</small>
        </h1>
        
      </section>

      <!-- Main content -->
      <section class="content">
       
      <div class="col-md-12">
          
          <!-- general form elements -->
          <div class="box box-success" style="padding-left:150px;padding-right:200px;padding-top:20px;padding-bottom:20px;">
          
            <div class="box-header with-border">
              <p>{{ $error_msg or "" }}</p>
              <h3 class="box-title">Register Customer</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="box-body">                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                  <div class="col-xs-5">
                    <input name="name_customer" type="text" class="form-control" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                <label for="inputdate1" class="col-sm-2 control-label">Alamat</label>
                <div class="col-xs-5">
                	<textarea name="address_customer" class="form-control" rows="3" placeholder=""></textarea>
                </div>
                </div>
                <div class="form-group">
	                <label for="inputEmail3" class="col-sm-2 control-label">No. Telpon</label>
	                <div class="col-xs-5">
	                	<input name="tlp_customer" type="text" class="form-control">                  
	                </div>
                </div>
                <div class="form-group">
	                <label for="inputEmail3" class="col-sm-2 control-label">No. Fax</label>
	                <div class="col-xs-5">
	                	<input name="fax_customer" type="text" class="form-control">                  
	                </div>
                </div>             
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
              </div>
            </form>
              </div>
              <!-- /.box-body -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
@include('footer')