@include('header')
  @include('admin/header')
  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  @include('admin/sidebar')

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Fungi Collections
        <small>Management</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('v-fungi-mng') }}"><i class=""></i>Fungi Management</a></li>
        <!-- <li><a href="#">Layout</a></li>
        <li class="active">Fixed</li> -->
      </ol>
    </section>
@include('verificator/fungi-list')
  </div>
  <!-- /.content-wrapper -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

  @include('footer')
