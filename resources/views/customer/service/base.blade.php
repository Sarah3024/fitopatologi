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
        <ol class="breadcrumb">
            <li><a href="{{ route('cus.fungi') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <!-- <li><a href="#">Layout</a></li>
            <li class="active">Fixed</li> -->
        </ol>
      </section>  

      <!-- Main content -->
      <section class="content">
       
      <div class="col-md-12">
          <!-- general form elements -->
          @include('service-form')
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