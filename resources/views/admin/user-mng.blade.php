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
        User
        <small>Management</small>
      </h1>
     <!--  <ol class="breadcrumb">
        <li><a href="{{ route('user-mng') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Layout</a></li>
        <li class="active">Fixed</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content">
    {{ $error_msg }}
      <!-- Default box -->
      <div class="box box-success" style="padding:20px;">
      <div class="box-body">
      <div class="box-group" id="accordion">
      <div class="panel box box-default">
        <div class="box-header with-border">
          <h4 class="box-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
              <button type="button" class="btn btn-default btn-flat pull-right">Add User</button>
            </a>
          </h4>
        </div>
          <!-- <h3 class="box-title">Add</h3> -->

        <div id="collapseOne" class="panel-collapse collapse">
        <!-- /.box-header -->
    @include('fungi_entri/modal-add-user')
      </div>
        <div class="box-header">
          <h3 class="box-title">User List</h3>
        
        </div>
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead>
            <tr>
              <th>Name</th>
              <th>Role</th>
              <th>Instansi</th>
              <th>Username</th>
              <th>E-mail</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              @foreach($users_data as $key => $user)
            <tr id="user-{{$user->id_users}}">
              <td id="user-lengthName">{{ $user->lengthName }}</td>
              <td id="user-role" data-value="{{$user->id_usertype}}">
                @if($user->id_usertype == 1)
                  <span class="label label-warning">Admin</span></td>
                @elseif($user->id_usertype == 2)
                  <span class="label label-primary">Operator</span>
                @elseif($user->id_usertype == 3)
                  <span class="label label-success">Verificator</span>
                @else($user->id_usertype == 4)
                  <span class="label label-default">Customer</span>
                @endif
              <td id="user-instansi-user">{{ $user->instansi_user }}</td>
              <td id="user-username">{{ $user->username }}</td>
              <td id="user-email">{{ $user->email }}</td>
              <td>
                <!-- <form class="row" method="DELETE"  action="{{ route('user-delete', ['id_users' => $user->id_users])}}"  onsubmit="return confirm('Are you sure?')">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
                <a class="btn btn-sm btn-primary" href="#" onClick="edit_user({{ $user->id_users }})">Edit</a>
                <a type="submit" href="delete/{{$user->id_users}}" data-method="delete" class="btn btn-sm btn-danger" onsubmit="return confirm('Are you sure?')">Delete</a>
                <!-- </form> -->
              </td>
            </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.box-footer-->

      <!-- /.box -->
      
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
         <script type="text/javascript">

            var edit_user = function (id_user) {
              lengthName = $("#user-"+id_user + " > #user-lengthName").text();
              $(".user-lengthName").last().val(lengthName);

              role = $("#user-"+id_user + " > #user-role").attr('data-value');
              console.log(role);
              $(".user-role").find("input[name=id_usertype]").attr('checked', "");
              $(".user-role").find("input[name=id_usertype][value="+role+"]").prop('checked', true);
              // $('input[name=id_usertype][value="2"]').attr('checked', true);

              $(".user-id-user").last().val(id_user);

              instansi_user = $("#user-"+id_user + " > #user-instansi-user").text();
              $(".user-instansi-user").last().val(instansi_user);

              username = $("#user-"+id_user + " > #user-username").text();
              $(".user-username").last().val(username);

              email = $("#user-"+id_user + " > #user-email").text();
              $(".user-email").last().val(email);

              $(".password-group").last().addClass('hide');

              $("#edit-user").removeClass('hide');

              window.location.href = "#edit-user";
            }

            $(document).ready(function(){

            });
      </script>
      <div id="edit-user" class="hide">
        @include('fungi_entri/modal-add-user')
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