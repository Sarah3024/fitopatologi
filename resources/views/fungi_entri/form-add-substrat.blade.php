<div class="box-header with-border">
                    <h3 class="box-title">Substrat</h3>
                    <p>{{ $error_msg or "" }}</p>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Substrat Name</label>
                    <div class="col-sm-8">
                      <input value='{{ $input["name_substrat"] or ""}}' type="substrat" class="form-control fungi-name-substrat" id="" name="name_substrat" placeholder="name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Ecology</label>
                    <div class="col-sm-8">
                      <input value='{{ $input["ecology"] or ""}}' type="substrat" class="form-control fungi-ecology" id="" name="ecology" placeholder="ecology">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Biology</label>
                    <div class="col-sm-8">
                      <input value='{{ $input["biology"] or ""}}' type="substrat" class="form-control fungi-biology" id="" name="biology" placeholder="biology">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Physiology</label>
                    <div class="col-sm-8">
                      <input value='{{ $input["physiology"] or ""}}' type="substrat" class="form-control fungi-physiology" id="" name="physiology" placeholder="physiology">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Mycotoxin</label>
                    <div class="col-sm-8">
                      <input value='{{ $input["mycotoxin"] or ""}}' type="substrat" class="form-control fungi-mycotoxin" id="" name="mycotoxin" placeholder="mycotoxin">
                    </div>
                  </div>