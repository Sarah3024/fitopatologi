<div class="box-header with-border">
                    <h3 class="box-title">Isolator</h3>
                    <p>{{ $error_msg or "" }}</p>
                  </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Isolator Name</label>
                  <div class="col-sm-8">
                    <input value='{{ $input["name_isolator"] or ""}}' type="" class="form-control fungi-name-isolator" id="" name="name_isolator" placeholder="name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Instansi</label>
                  <div class="col-sm-8">
                    <input value='{{ $input["instansi_isolator"] or ""}}' type="" class="form-control fungi-instansi-isolator" id="" name="instansi_isolator" placeholder="instansi">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Expertise</label>
                  <div class="col-sm-8">
                    <input value='{{ $input["instansi_isolator"] or ""}}' type="" class="form-control fungi-expertise-isolator" id="" name="expertise_isolator" placeholder="expertise">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Isolated at</label>
                  <div class="col-xs-5">
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input id="datepicker1" class="datepicker fungi-date-isolat" value='{{ $input["date_isolator"] or ""}}' type="date" name="date_isolator" >

                    </div>
                  </div>
                </div>