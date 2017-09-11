            <div class="box-header with-border">
              <h3 class="box-title">Storage</h3>
              <p>{{ $error_msg or "" }}</p>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Tube Number</label>
              <div class="col-sm-8">
                <input value='{{ $input["no_tube"] or ""}}' type="" class="form-control fungi-no-tube" id="" name="no_tube" placeholder="no tube">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Rack</label>
              <div class="col-sm-8">
                <input value='{{ $input["rack"] or ""}}' type="" class="form-control fungi-rack" id="" name="rack" placeholder="rack">
              </div>
            </div>
           <!--  <div class="form-group">
            <label for="" class="col-sm-3 control-label">Isolator</label>
              <div class="col-sm-8">
                <div class="input-group input-group">
                  <input value='{{ $input["name_isolator"] or ""}}' type="isolator" class="form-control" id="" name="name_isolator" placeholder="name isolator">
                  <span class="input-group-btn">
                    <button type="submit" class="btn btn-info btn-flat">Add New Isolator</button>
                  </span>
                </div>
              </div>
            </div>
            <div class="form-group">
            <p for="" class="col-sm-3 control-label">Or</p>
              <div class="col-sm-8">
                <select class="isolator" style="width: 385px ;  height:34px" id="id_isolator" name="id_isolator" action="{{ route('add-prov') }}" value="{{ old('id_isolator') }}" autofocus>
                      <option value="0" disabled="true" selected="true">--Choouse a Isolator--</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Raiser</label>
                <div class="col-sm-8">
                  <div class="input-group input-group">
                    <input value='{{ $input["name_raiser"] or ""}}' type="raiser" class="form-control" id="" name="name_raiser" placeholder="name raiser">
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-info btn-flat">Add New Raiser</button>
                    </span>
                  </div>
                </div>
            </div>
            <div class="form-group">
            <p for="" class="col-sm-3 control-label">Or</p>
              <div class="col-sm-8">
                <select class="raiser" style="width: 385px ;  height:34px" id="id_raiser" name="id_raiser" action="{{ route('add-prov') }}" value="{{ old('id_raiser') }}" autofocus>
                      <option value="0" disabled="true" selected="true">--Choouse a Raiser--</option>
                </select>
              </div>
            </div>
 -->