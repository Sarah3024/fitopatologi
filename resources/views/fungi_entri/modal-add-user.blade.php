<div class="box-body">
          <!-- <div class="row"> -->
          <div class="col-md-8">
            <form class="form-horizontal" action="" method="POST">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" class="user-id-user" name="id_users" value="{{ $input['id_users'] or ''}}">

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                  <input value='{{ $input["lengthName"] or ""}}' type="Name" name="lengthName" class="form-control user-lengthName" placeholder="Name" autofocus>
                </div>
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Instansi</label>
                <div class="col-sm-10">
                  <input value='{{ $input["instansi_user"] or ""}}' type="Instansi" name="instansi_user" class="form-control user-instansi-user" placeholder="Instansi" autofocus>
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input value='{{ $input["email"] or ""}}' type="email" class="form-control user-email" name="email" placeholder="Email" autofocus>
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Username</label>
                <div class="col-sm-10">
                  <input value='{{ $input["username"] or ""}}' type="Username" name="username" class="form-control user-username" placeholder="Username" autofocus>
                </div>
              </div>
              <div class="form-group password-group">
                <label for="" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                  <input value='{{ $input["password"] or ""}}' type="Password" name="password" class="form-control user-password" placeholder="Password" autofocus>
                </div>
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Role</label>
                <div class="radio">
                <label>
                <ul class="user-role">
                  <li><input type="radio" value="{{ old('id_usertype', 2) }}" name="id_usertype" class= "user-role"  checked> Operator</li>
                  <li><input type="radio" value="{{ old('id_usertype', 3) }}" name="id_usertype" class= "user-role" checked> Verificator</li>
                </ul>
                </label>
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Save</button>
              </div>
              </form>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          
          <!-- /.row -->
        </div>