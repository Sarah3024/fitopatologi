<div class="box-header with-border">
                    <h3 class="box-title">Species</h3>
                    <p>{{ $error_msg or "" }}</p>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Division</label>
                    <div class="col-sm-8">
                        <input value='{{ $input["name_divisi"] or ""}}' type="species" class="form-control" id="" name="name_divisi" placeholder="name division">
                    </div>
                  </div>
                  <div class="form-group{{ $errors->has('id_divisi') ? ' has-error' : '' }}">
                  <p for="id_divisi" class="col-sm-3 control-label">Or</p>
                    <div class="col-sm-8">
                      <select class="divisi" style="width: 385px ;  height:34px" id="id_divisi" name="id_divisi" action="{{ route('add-divisi') }}" value="{{ old('id_divisi') }}" autofocus>
                        <option value="0" disabled="true" selected="true">--Choose a Division--</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Class</label>
                    <div class="col-sm-8">
                        <input value='{{ $input["name_class"] or ""}}' type="species" class="form-control" id="" name="name_class" placeholder="name class">
                    </div>
                  </div>
                  <div class="form-group{{ $errors->has('id_class') ? ' has-error' : '' }}">
                  <p for="id_class" class="col-sm-3 control-label">Or</p>
                    <div class="col-sm-8">
                      <select class="class" style="width: 385px ;  height:34px" id="id_class" name="id_class" action="{{ route('add-findclass') }}" value="{{ old('id_class') }}" autofocus>
                        <option value="0" disabled="true" selected="true">--Choose a Class--</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Ordo</label>
                    <div class="col-sm-8">
                        <input value='{{ $input["name_ordo"] or ""}}' type="species" class="form-control" id="" name="name_ordo" placeholder="name ordo">
                    </div>
                  </div>
                  <div class="form-group{{ $errors->has('id_ordo') ? ' has-error' : '' }}">
                  <p for="id_ordo" class="col-sm-3 control-label">Or</p>
                    <div class="col-sm-8">
                      <select class="ordo" style="width: 385px ;  height:34px" id="id_ordo" name="id_ordo" action="{{ route('add-ordo') }}" value="{{ old('id_ordo') }}" autofocus>
                        <option value="0" disabled="true" selected="true">--Choose a Ordo--</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Family</label>
                    <div class="col-sm-8">
                        <input value='{{ $input["name_family"] or ""}}' type="species" class="form-control" id="" name="name_family" placeholder="name family">
                    </div>
                  </div>
                  <div class="form-group{{ $errors->has('id_family') ? ' has-error' : '' }}">
                  <p for="id_family" class="col-sm-3 control-label">Or</p>
                    <div class="col-sm-8">
                      <select class="family" style="width: 385px ;  height:34px" id="id_family" name="id_family" action="{{ route('add-family') }}" value="{{ old('id_family') }}" autofocus>
                        <option value="0" disabled="true" selected="true">--Choose a Family--</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Genus</label>
                    <div class="col-sm-8">
                        <input value='{{ $input["name_genus"] or ""}}' type="species" class="form-control" id="" name="name_genus" placeholder="name genus">
                    </div>
                  </div>
                  <div class="form-group{{ $errors->has('id_genus') ? ' has-error' : '' }}">
                  <p for="id_genus" class="col-sm-3 control-label">Or</p>
                    <div class="col-sm-8">
                      <select class="genus" style="width: 385px ;  height:34px" id="id_genus" name="id_genus" action="{{ route('add-genus') }}" value="{{ old('id_genus') }}" autofocus>
                        <option value="0" disabled="true" selected="true">--Choose a Genus--</option>
                      </select>
                    </div>
                  </div>
                  <!-- <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Name Species</label>
                    <div class="col-sm-8">
                      <input value='{{ $input["name_species"] or ""}}' type="species" class="form-control" id="" name="name_species" placeholder="name species">
                    </div>
                  </div> -->
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Description</label>
                    <div class="col-sm-8">
                      <textarea id="editor2" name="editor2" rows="10" cols="80">{{$input["description_species"] or ""}}</textarea>
                    </div>
                  </div>


