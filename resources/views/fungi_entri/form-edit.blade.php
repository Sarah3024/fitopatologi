<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-success" style="padding-left:100px;padding-right:150px;padding-top:10px;">
        <form class="form-horizontal" action="{{route('fungi-edit')}}" method="POST">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" class="fungi-id-cendawan" name="id_cendawan" value="{{ $input['id_cendawan'] or ''}}">
          {{ csrf_field() }} {{ method_field('PATCH') }}
          <div class="box-body" id="edit-fungi">
          <div class="box-header with-border">
              <h3 class="box-title">Add New Fungi Collection</h3>
              <p>{{ $error_msg or "" }}</p>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Isolate Code</label>
              <div class="col-sm-8">
                <input value='{{$isolat_cendawan->code_cendawan or ""}}' type="" class="form-control fungi-code-cendawan" id="" name="code_cendawan" placeholder="Code">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Name Isolate</label>
              <div class="col-sm-8">
                <input value='{{$isolat_cendawan->name_cendawan or ""}}' type="" class="form-control fungi-name-cendawan" id="" name="name_cendawan" placeholder="Name">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Quantity</label>
              <div class="col-sm-8">
                <input value='{{$isolat_cendawan->quantity or ""}}' type="" class="form-control fungi-quantity" id="" name="quantity_cendawan" placeholder="Quantity">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Label</label>
              <div class="col-sm-8">
                <input value='{{$isolat_cendawan->label or ""}}' type="" class="form-control fungi-label-cendawan" id="" name="label_cendawan" placeholder="Label">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Utilization</label>
              <div class="col-sm-8">
                <!-- <div class="box-body pad" style="margin-left: 30px;"> -->
                  <form>
                    <textarea id="editor3" class="fungi-utilization" name="utilization" rows="10" cols="80">{{$isolat_cendawan->utilization}}</textarea>
                  </form>
                <!-- </div> -->
              </div>
            </div>
            <div class="box-header with-border">
                    <h3 class="box-title">Location</h3>
                    <p>{{ $error_msg or "" }}</p>
                  </div>
                <div class="form-group{{ $errors->has('id_state') ? ' has-error' : '' }}">
                  <label for="id_state" class="col-sm-3 control-label">State</label>
                  <div class="col-sm-8">
                    <select class="states" style="width: 385px ;  height:34px" id="id_state" name="id_state" action="{{ route('add-location') }} value="{{ old('id_state') }}" autofocus>
                    @if(isset($states))
                      <option value="0" disabled="true" selected="true">--Choose a State--</option>
                      @foreach($states as $state)
                        <option value="{{$state -> id_state}}">{{$state -> name_state}}</option>
                      @endforeach
                    @endif
                    </select>
                  </div>
                </div>

                <div class="form-group{{ $errors->has('id_province') ? ' has-error' : '' }}">
                  <label for="id_province" class="col-sm-3 control-label">Province</label>
                  <div class="col-sm-8">
                    <select class="prov" style="width: 385px ;  height:34px" id="id_province" name="id_province" action="{{ route('add-prov') }}" value="{{ old('id_province') }}" autofocus>
                      <option value="0" disabled="true" selected="true">--Choose a Province--</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">City</label>
                  <div class="col-sm-8">
                    <select class="city" style="width: 385px ;  height:34px" id="id_city" name="id_city" action="{{ route('add-city') }}" value="{{ old('id_city') }}" autofocus>
                      <option value="0" disabled="true" selected="true">--Choose a City--</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">District</label>
                  <div class="col-sm-8">
                    <select class="district" style="width: 385px ;  height:34px" id="id_district" name="id_district" action="{{ route('add-district') }}" value="{{ old('id_district') }}" autofocus>
                      <option value="0" disabled="true" selected="true">--Choose a District--</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Latitude</label>
                  <div class="col-sm-8">
                    <input value='{{$location->latitude}}' type="latitude" class="form-control" id="latitude" name="latitude" placeholder="latitude">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Longitude</label>
                  <div class="col-sm-8">
                    <input value='{{$location->longitude}}' type="longitude" class="form-control" id="" name="longitude" placeholder="longitude">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Atitude</label>
                  <div class="col-sm-8">
                    <input value='{{$location->atitude}}' type="atitude" class="form-control" id="" name="atitude" placeholder="atitude">
                  </div>
                </div>
                <div class="box-header with-border">
                    <h3 class="box-title">Substrat</h3>
                    <p>{{ $error_msg or "" }}</p>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Substrat Name</label>
                    <div class="col-sm-8">
                      <input value='{{$substrat->name_substrat}}' type="substrat" class="form-control fungi-name-substrat" id="" name="name_substrat" placeholder="name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Ecology</label>
                    <div class="col-sm-8">
                      <input value='{{$substrat->ecology}}' type="substrat" class="form-control fungi-ecology" id="" name="ecology" placeholder="ecology">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Biology</label>
                    <div class="col-sm-8">
                      <input value='{{$substrat->biology}}' type="substrat" class="form-control fungi-biology" id="" name="biology" placeholder="biology">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Physiology</label>
                    <div class="col-sm-8">
                      <input value='{{$substrat->physiology}}' type="substrat" class="form-control fungi-physiology" id="" name="physiology" placeholder="physiology">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Mycotoxin</label>
                    <div class="col-sm-8">
                      <input value='{{$substrat->mycotoxin}}' type="substrat" class="form-control fungi-mycotoxin" id="" name="mycotoxin" placeholder="mycotoxin">
                    </div>
                  </div>
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
                      <textarea id="editor4" name="description_species" rows="10" cols="80">{{$species->description}}</textarea>
                    </div>
                  </div>
                  <div class="box-header with-border">
                    <h3 class="box-title">Isolator</h3>
                    <p>{{ $error_msg or "" }}</p>
                  </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Isolator Name</label>
                  <div class="col-sm-8">
                    <input value='{{$storage->isolator->name_isolator or ""}}' type="" class="form-control fungi-name-isolator" id="" name="name_isolator" placeholder="name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Instansi</label>
                  <div class="col-sm-8">
                    <input value='{{$storage->isolator->instansi_isolator or ""}}' type="" class="form-control fungi-instansi-isolator" id="" name="instansi_isolator" placeholder="instansi">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Expertise</label>
                  <div class="col-sm-8">
                    <input value='{{$storage->isolator->expertise_isolator or ""}}' type="" class="form-control fungi-expertise-isolator" id="" name="expertise_isolator" placeholder="expertise">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Isolated at</label>
                  <div class="col-xs-5">
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input id="datepicker1" class="datepicker fungi-date-isolat" value='{{$storage->isolator->date_isolator}}' type="date" name="date_isolator" >

                    </div>
                  </div>
                </div>
                <div class="box-header with-border">
                    <h3 class="box-title">Raiser</h3>
                    <p>{{ $error_msg or "" }}</p>
                  </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Raiser Name</label>
                  <div class="col-sm-8">
                    <input value='{{$storage->raiser->name_raiser or ""}}' type="" class="form-control fungi-name-raiser" id="" name="name_raiser" placeholder="name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Instansi</label>
                  <div class="col-sm-8">
                    <input value='{{$storage->raiser->instansi_raiser or ""}}' type="" class="form-control fungi-instansi-raiser" id="" name="instansi_raiser" placeholder="instansi">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Expertise</label>
                  <div class="col-sm-8">
                    <input value='{{$storage->raiser->expertise_raiser or ""}}' type="" class="form-control fungi-expertise-raiser" id="" name="expertise_raiser" placeholder="expertise">
                  </div>
                </div>
                <div class="box-header with-border">
                  <h3 class="box-title">Storage</h3>
                  <p>{{ $error_msg or "" }}</p>
                </div>
                <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Tube Number</label>
                  <div class="col-sm-8">
                    <input value='{{$storage->no_tube or ""}}' type="" class="form-control fungi-no-tube" id="" name="no_tube" placeholder="no tube">
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Rack</label>
                  <div class="col-sm-8">
                    <input value='{{$storage->rack or ""}}' type="" class="form-control fungi-rack" id="" name="rack" placeholder="rack">
                  </div>
                </div>
                <div class="box-header with-border">
                  <h3 class="box-title">Photo</h3>
                  <p>{{ $error_msg or "" }}</p>
                </div>
                <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Biakan</label>
                  <div class="col-sm-8">
                      <input class="fungi-biakan" type="file" id="exampleInputFile">
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Micrograph</label>
                  <div class="col-sm-8">
                      <input class="fungi-micrograph" type="file" id="exampleInputFile">
                  </div>
                </div>
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


            <div class="box-footer">
              <a type="submit" style="padding-right:10px;" class="btn btn-primary pull-right">Save</a>
              <a href="{{route('fungi-mng')}}" class="btn btn-default pull-right">Cancel</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

</section>
  <script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor3');
    CKEDITOR.replace('editor4');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
  </script>
  @include('select')
