<div class="box-header with-border">
              <h3 class="box-title">Add New Fungi Collection</h3>
              <p>{{ $error_msg or "" }}</p>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Isolate Code</label>
              <div class="col-sm-8">
                <input value='{{ $input["code_cendawan"] or ""}}' type="" class="form-control fungi-code-cendawan" id="" name="code_cendawan" placeholder="Code">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Name Isolate</label>
              <div class="col-sm-8">
                <input value='{{ $input["name_cendawan"] or ""}}' type="" class="form-control fungi-name-cendawan" id="" name="name_cendawan" placeholder="Name">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Quantity</label>
              <div class="col-sm-8">
                <input value='{{ $input["quantity_cendawan"] or ""}}' type="" class="form-control fungi-quantity" id="" name="quantity_cendawan" placeholder="Quantity">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Label</label>
              <div class="col-sm-8">
                <input value='{{ $input["label_cendawan"] or ""}}' type="" class="form-control fungi-label-cendawan" id="" name="label_cendawan" placeholder="Label">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Utilization</label>
              <div class="col-sm-8">
                <!-- <div class="box-body pad" style="margin-left: 30px;"> -->
                  <form>
                    <textarea id="editor1" class="fungi-utilization" name="editor1" rows="10" cols="80">{{$input["utilization"] or ""}}</textarea>
                  </form>
                <!-- </div> -->
              </div>
            </div>