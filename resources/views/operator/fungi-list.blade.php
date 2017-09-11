    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-success" style="padding:20px;padding-bottom:20px;">
        <div class="box-header" style="padding-bottom:30px;">
          <h3 class="box-title">Fungi List</h3>
        <div class="box-tools">
          <ul class="nav navbar-nav">
            <li><a type="submit" class="btn btn-default" href="{{ route('fungi-add') }}" style="margin-right:20px;">Add New Collection</a></li>
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
          <table class="table table-hover">
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
              <tr>
                <td>{{ $i }}</td>
                <td>{{ $isolat->code_cendawan }}</td>
                <td><i>{{ $isolat->name_cendawan }}</i></td>
                <td>
                  <button type="submit" class="btn btn-sm btn-primary" href="{{ route('fungi-edit') }}">Edit</button>
                  <button type="submit" class="btn btn-sm btn-danger" href="#">Delete</button>
                </td>
              </tr>
              @endforeach
            </tbody>
            <!-- 
            <tr>
              <td>183</td>
              <td>John Doe</td>
              <td>
                <button type="submit" class="btn btn-sm btn-primary" href="{{ route('mildew-edit') }}">Edit</button>
                <button type="submit" class="btn btn-sm btn-danger" href="#">Delete</button>
              </td>
            </tr> -->
          </table>
        </div>
        <!-- /.box-footer-->

      <!-- /.box -->
      
    </section>