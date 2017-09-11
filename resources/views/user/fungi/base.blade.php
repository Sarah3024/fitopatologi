
@include('user/header')
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
     
  <!-- Full Width Column -->
  

      &nbsp;<!-- <br/>&nbsp; -->
      <!-- Main content -->

      <!-- </section> --> 

      @include('fungi-list')
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
  <!-- /.content-wrapper -->
  @include('footer')
