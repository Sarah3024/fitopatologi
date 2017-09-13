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
        Order
        <small>Management</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('order-mng') }}"><i class="fa fa-dashboard"></i> Order Management</a></li>
        <!-- <li><a href="#">Layout</a></li>
        <li class="active">Fixed</li> -->
      </ol>
    </section>

    <!-- Main content -->
        <section class="content">
      <!-- Default box -->
      <div class="box box-success" style="padding:20px;padding-bottom:20px;">
        <div class="box-header">
          <h3 class="box-title">Order List</h3>
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th>Date</th>
              <th>Date Expire</th>
              <th>No Order</th>
              <th>Type</th>
              <th></th>
            </tr>
            @if (!empty($order))
              @foreach($order as $item)
                <tr>
                  <td><?php echo date('d M Y', strtotime($item->date_order)); ?></td>
                  <td><?php echo date('d M Y', strtotime($item->date_expire)); ?></td>
                  <td>{{ $item->id_order }}</td>
                  <td>
                    @if ($item->typeOrder_id === 1)
                      <span class="label label-primary">Isolate Ordering</span>
                    @elseif ($item->typeOrder_id === 2)
                      <span class="label label-warning">Isolate Analysis</span>
                    @endif
                  <td>
                    <a class="btn btn-sm btn-primary" href="{{ route('order-mng-view') }}?id={{ $item->id_order }}">View Detail</a>
                  </td>
                  </td>
                </tr>
              @endforeach
            @endif
            <tr>
              <td>10 Aug 2017</td>
              <td>10 Aug 2017</td>
              <td>1</td>
              <td><span class="label label-warning">Isolate Analysis</span></td>
              <td>
                <button type="submit" class="btn btn-sm btn-primary" href="{{ route('detail-order') }}">View Detail</button>
              </td>
            </tr>
            <tr>
              <td>10 Aug 2017</td>
              <td>10 Aug 2017</td>
              <td>2</td>
              <td><span class="label label-primary">Isolate Ordering</span></td>
              <td>
                <button type="submit" class="btn btn-sm btn-primary" href="#">View Detail</button>
              </td>
            </tr>
          </table>
        </div>
        <!-- /.box-footer-->

      <!-- /.box -->
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

@include('footer')