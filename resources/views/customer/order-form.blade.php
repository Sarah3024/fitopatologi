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
        <?php if (!\Auth::check()) { ?>
          <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-info"></i> Kamu Harus Login!</h4>
            <p>Kamu harus Login terlebih dahulu. Login <a href="{{route('login')}}">disini</a> atau <a href="{{route('register')}}">Sign Up</a> untuk membuat akun.</p>
          </div>
        <?php } else { ?>
          <!-- general form elements -->
          <div class="box box-success" style="padding-left:150px;padding-right:200px;padding-top:20px;padding-bottom:20px;">
          
            <div class="box-header with-border">
              <p>{{ $error_msg or "" }}</p>
              <h3 class="box-title">Isi untuk memesan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="customer_id" value="{{ $customer->id_customer }}">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Isolate Type</label>
                  <div class="col-sm-10">
                    <!-- <input type="email" class="form-control" id="inputEmail3" placeholder="type isolate sample"> -->
                    <p><i></i></p>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Quantity</label>
                  <div class="col-xs-5">
                    <input name="quantity_order" type="text" class="form-control" id="inputEmail3" placeholder="quantity">
                  </div>
                </div>
                <div class="form-group">
                <label for="inputdate1" class="col-sm-2 control-label">Order Date</label>
                <div class="col-xs-5">
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input name="date_order" type="date" class="form-control pull-right" id="datepicker">
                  </div>
                </div>
                </div>
                <div class="form-group">
                <label for="inputdate2" class="col-sm-2 control-label">Tanggal Dikirim/diambil</label>
                <div class="col-xs-5">
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input name="date_expire" type="date" class="form-control pull-right" id="datepicker">
                    </div>
                </div>
                </div>              
              <div class="box-header with-border">
                <h3 class="box-title">Keterangan isolat cendawan yang dipesan</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Isolate Code</label>
                  <div class="col-sm-10">
                    <input name="isolate-code" type="text" class="form-control" id="inputEmail3" placeholder="isolate code">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Unit/Kemasan</label>
                  <div class="col-sm-10">
                    <input name="unitPackage_isolat" type="unit/kemasan" class="form-control" id="exampleInputPassword1" placeholder="unit/kemasan">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Jumlah</label>
                    <div class="col-xs-5">
                      <input name="quantity_isolat" type="jumlah" class="form-control" id="exampleInputEmail1" placeholder="jumlah">
                    </div>
                </div>
                &nbsp;
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Keterangan</label>
                    <div class="col-sm-10">
                      <textarea name="info_isolat_order" class="form-control" rows="3" placeholder=""></textarea>
                    </div>
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
              </div>
            </form>
          <?php } ?>
              </div>
              <!-- /.box-body -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  @include('datepicker')
 @include('footer')