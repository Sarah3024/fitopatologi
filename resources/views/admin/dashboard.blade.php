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
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('fungi-mng')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <!-- <li><a href="#">Layout</a></li>
        <li class="active">Fixed</li> -->
      </ol>
    </section>

    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <?php if (Auth::user()->hasRole('operator')) { ?>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><span>{{ (count($fungi_list)) }}</span></h3>

              <p>Fungi Collections</p>
            </div>
            <div class="icon">
              <i class="ion ion-leaf"></i>
            </div>
            <a href="{{ route('fungi-add') }}" class="small-box-footer">Add Collection <i class="fa fa-plus-circle"></i></a>
          </div>
        </div>
        <?php } ?>
        <!-- ./col -->
        <?php if (Auth::user()->hasRole('verificator')) { ?>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><span>{{ (count($unverified)) }}</span></h3>

              <p>Unverified Fungi</p>
            </div>
            <div class="icon">
              <i class="ion ion-leaf"></i>
            </div>
            <a href="{{ route('fungi-add') }}" class="small-box-footer">Add Collection <i class="fa fa-plus-circle"></i></a>
          </div>
        </div>

        <?php } ?>
        <?php if (Auth::user()->hasRole('admin')) { ?>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><span>{{ count($users) }}</span></h3>

              <p>Users</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="{{ route('user-mng') }}" class="small-box-footer">Add User <i class="fa fa-plus-circle"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <?php } ?>
        <?php if (Auth::user()->hasRole('admin')) { ?>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><span>{{ count($customer) }}</span></h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <?php } ?>
        <!-- ./col -->

      </div>
    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

  @include('footer')
