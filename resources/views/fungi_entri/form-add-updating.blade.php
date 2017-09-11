<div class="box-header with-border">
                    <h3 class="box-title">Updating</h3>
                    <p>{{ $error_msg or "" }}</p>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Update</label>
                    <div class="col-xs-5">
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input class="datepicker fungi-updating" value='{{ $input[""] or ""}}' type="date" name="datepicker2" id="datepicker2">
                      </div>
                    </div>
                  </div>
                  