    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-success" style="padding:20px;padding-bottom:20px;">
        <div class="box-header" style="padding-bottom:30px;">
          <h3 class="box-title">Fungi List</h3>
        <div class="box-tools">
          <a type="submit" style="margin-right:20px;" class="btn btn-default pull-right"" href="{{ route('fungi-add') }}">Add New Collection</a></li>
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
              @foreach($isolat_cendawan as $key => $isolat)
              <?php $i++ ?>
              <tr id="fungi-{{$isolat->id_cendawan}}">
                <td>{{ $i }}</td>
                <td  id="fungi-code-cendawan">{{ $isolat->code_cendawan }}</td>
                <td  id="fungi-name-cendawan"><i>{{ $isolat->name_cendawan }}</i></td>
                <td>
                  <a type="submit" class="btn btn-sm btn-info" href="{{ route('fungi-view') }}?id={{$isolat->id_cendawan}}">View</a>
                  <a type="submit" class="btn btn-sm btn-primary" href="{{ route('fungi-edit') }}?id={{$isolat->id_cendawan}}">Edit</a>
                  <a type="submit" href="deletefungi/{{$isolat->id_cendawan}}" data-method="delete" class="btn btn-sm btn-danger" onsubmit="return confirm('Are you sure?')">Delete</a>
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
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>