@include('user/header')
  <!-- Full Width Column -->
<div class="content-wrapper" style="padding-left:100px;padding-right:100px;">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header" style="background-color: #c5e1a5;padding-bottom:20px;">
        <h1>
          Phitopatology
          <small>Information System</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('fungi') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <!-- <li><a href="#">Layout</a></li>
            <li class="active">Fixed</li> -->
        </ol>

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

            <!-- /.box-header -->
            <!-- form start -->
            @include('service-form')
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