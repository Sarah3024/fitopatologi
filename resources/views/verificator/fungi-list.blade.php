    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-success" style="padding:20px;padding-bottom:20px;">
        <div class="box-header">
          <h3 class="box-title">Fungi List</h3>
        <div class="box-tools">
          <ul class="nav navbar-nav">
            <li><div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
              <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div></li>
            <ul/>
          </div>
        </div>
        <div class="box-body table-responsive" style="padding-right:30px;padding-left:30px;">
          <table id="example2" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>No</th>
              <th>Code</th>
              <th>Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 0 ?>
            @foreach($isolat_cendawan as $key => $fungi)
            <?php $i++ ?>
            <tr>
              <td>{{ $i }}</td>
              <td>{{ $fungi->code_cendawan }}</td>
              <td><i>{{ $fungi->name_cendawan }}</i></td>
              <td>
                <a class="btn btn-sm btn-primary" href="{{ route('v-fungi-view') }}?id={{$fungi->id_cendawan}}">View Detail</a>
              </td>
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.box-footer-->

      <!-- /.box -->
      
    </section>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>