<section class="content">
  <div class="row">
    <div class="col-md-12">
    <div class="pad margin no-print">
      <!-- <div class="callout callout-info" style="margin-bottom: 0!important;">
        <h4><i class="fa fa-info"></i> Note:</h4>
        Isi data baru untuk membuat koleksi cendawan baru.
      </div> -->
    </div>
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs" id="tabMenu">
          <li role="presentation" class="active"><a href="#substrat" aria-controls="substrat" role="tab" data-toggle="tab">Substrat</a></li>
          <li><a href="#species" data-toggle="tab"><i aria-hiden="true"></i>Species</a></li>
          <li><a href="#location" data-toggle="tab"><i aria-hiden="true"></i>Location</a></li>
          <li><a href="#isolator" data-toggle="tab"><i aria-hiden="true"></i>Isolator</a></li>
          <li><a href="#raiser" data-toggle="tab"><i ariahiden-="true"></i>Raiser</a></li>
        </ul>
          <div class="tab-content" style="padding-left:150px;padding-right:200px;padding-top:10px;">
<!-- substrat -->
            <div role="tabpanel" class="active tab-pane" id="substrat">
              <form class="form-horizontal" action="" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="box-body">
                  <div class="box-header with-border">
                    <h3 class="box-title">Add New Substrat</h3>
                    <p>{{ $error_msg or "" }}</p>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Substrat Name</label>
                    <div class="col-sm-10">
                      <input value='{{ $input["name_substrat"] or ""}}' type="substrat" class="form-control" id="" name="name_substrat" placeholder="name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Ecology</label>
                    <div class="col-sm-10">
                      <input value='{{ $input["ecology"] or ""}}' type="substrat" class="form-control" id="" name="ecology" placeholder="ecology">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Biology</label>
                    <div class="col-sm-10">
                      <input value='{{ $input["biology"] or ""}}' type="substrat" class="form-control" id="" name="biology" placeholder="biology">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Physiolgy</label>
                    <div class="col-sm-10">
                      <input value='{{ $input["physiology"] or ""}}' type="substrat" class="form-control" id="" name="physiology" placeholder="physiology">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Mycotoxin</label>
                    <div class="col-sm-10">
                      <input value='{{ $input["mycotoxin"] or ""}}' type="substrat" class="form-control" id="" name="mycotoxin" placeholder="mycotoxin">
                    </div>
                  </div>
                </div>
                  
                  <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary pull-right">Save</button>
                </div>
              </form>
              
            </div>
              <!-- /.tab-pane -->
<!-- Species -->
            <div role="tabpanel" class="tab-pane" id="species">
              <form class="form-horizontal" action="" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="box-body">
                  <div class="box-header with-border">
                    <h3 class="box-title">Add New Species</h3>
                    <p>{{ $error_msg or "" }}</p>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Division</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group">
                        <input value='{{ $input["name_divisi"] or ""}}' type="species" class="form-control" id="" name="name_divisi" placeholder="name division">
                        <span class="input-group-btn">
                          <button type="submit" class="btn btn-info btn-flat">Add New Division</button>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group{{ $errors->has('id_divisi') ? ' has-error' : '' }}">
                  <p for="id_divisi" class="col-sm-2 control-label">Or</p>
                    <div class="col-sm-10">
                      <select class="divisi" style="width: 430px ;  height:34px" id="id_divisi" name="id_divisi" action="{{ route('add-divisi') }}" value="{{ old('id_divisi') }}" autofocus>
                        <option value="0" disabled="true" selected="true">--Choose a Division--</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Class</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group">
                        <input value='{{ $input["name_class"] or ""}}' type="species" class="form-control" id="" name="name_class" placeholder="name class">
                        <span class="input-group-btn">
                          <button type="submit" class="btn btn-info btn-flat">Add New Class</button>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group{{ $errors->has('id_class') ? ' has-error' : '' }}">
                  <p for="id_class" class="col-sm-2 control-label">Or</p>
                    <div class="col-sm-10">
                      <select class="class" style="width: 430px ;  height:34px" id="id_class" name="id_class" action="{{ route('add-class') }}" value="{{ old('id_class') }}" autofocus>
                        <option value="0" disabled="true" selected="true">--Choose a Class--</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Ordo</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group">
                        <input value='{{ $input["name_ordo"] or ""}}' type="species" class="form-control" id="" name="name_ordo" placeholder="name ordo">
                        <span class="input-group-btn">
                          <button type="submit" class="btn btn-info btn-flat">Add New Ordo</button>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group{{ $errors->has('id_ordo') ? ' has-error' : '' }}">
                  <p for="id_ordo" class="col-sm-2 control-label">Or</p>
                    <div class="col-sm-10">
                      <select class="ordo" style="width: 430px ;  height:34px" id="id_ordo" name="id_ordo" action="{{ route('add-ordo') }}" value="{{ old('id_ordo') }}" autofocus>
                        <option value="0" disabled="true" selected="true">--Choose a Ordo--</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Family</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group">
                        <input value='{{ $input["name_family"] or ""}}' type="species" class="form-control" id="" name="name_family" placeholder="name family">
                        <span class="input-group-btn">
                          <button type="submit" class="btn btn-info btn-flat">Add New Family</button>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group{{ $errors->has('id_family') ? ' has-error' : '' }}">
                  <p for="id_family" class="col-sm-2 control-label">Or</p>
                    <div class="col-sm-10">
                      <select class="family" style="width: 430px ;  height:34px" id="id_family" name="id_family" action="{{ route('add-family') }}" value="{{ old('id_family') }}" autofocus>
                        <option value="0" disabled="true" selected="true">--Choose a Family--</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Genus</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group">
                        <input value='{{ $input["name_genus"] or ""}}' type="species" class="form-control" id="" name="name_genus" placeholder="name genus">
                        <span class="input-group-btn">
                          <button type="submit" class="btn btn-info btn-flat">Add New Genus</button>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group{{ $errors->has('id_genus') ? ' has-error' : '' }}">
                  <p for="id_genus" class="col-sm-2 control-label">Or</p>
                    <div class="col-sm-10">
                      <select class="genus" style="width: 430px ;  height:34px" id="id_genus" name="id_genus" action="{{ route('add-genus') }}" value="{{ old('id_genus') }}" autofocus>
                        <option value="0" disabled="true" selected="true">--Choose a Genus--</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Name Species</label>
                    <div class="col-sm-10">
                      <input value='{{ $input["name_species"] or ""}}' type="species" class="form-control" id="" name="name_species" placeholder="name_species">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-10">
                      <form>
                    <textarea id="editor1" name="editor1" rows="10" cols="80">
                                            
                    </textarea>
                  </form>
                    </div>
                  </div> 
                </div>
                  
                  <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary pull-right">Save</button>
                </div>
              </form>
            </div>

              <!-- /.tab-pane -->
<!-- Location -->
            <div role="tabpanel" class="tab-pane" id="location">
              <form class="form-horizontal" action="" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="box-body">
                  <div class="box-header with-border">
                    <h3 class="box-title">Add New Location</h3>
                    <p>{{ $error_msg or "" }}</p>
                  </div>
                <div class="form-group{{ $errors->has('id_state') ? ' has-error' : '' }}">
                  <label for="id_state" class="col-sm-2 control-label">State</label>
                  <div class="col-sm-10">
                    <select class="states" style="width: 430px ;  height:34px" id="id_state" name="id_state" action="{{ route('add-location') }} value="{{ old('id_state') }}" autofocus>
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
                  <label for="id_province" class="col-sm-2 control-label">Province</label>
                  <div class="col-sm-10">
                    <select class="prov" style="width: 430px ;  height:34px" id="id_province" name="id_province" action="{{ route('add-prov') }}" value="{{ old('id_province') }}" autofocus>
                      <option value="0" disabled="true" selected="true">--Choose a Province--</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">City</label>
                  <div class="col-sm-10">
                    <select class="city" style="width: 430px ;  height:34px" id="id_city" name="id_city" action="{{ route('add-city') }}" value="{{ old('id_city') }}" autofocus>
                      <option value="0" disabled="true" selected="true">--Choose a City--</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">District</label>
                  <div class="col-sm-10">
                    <select class="district" style="width: 430px ;  height:34px" id="id_district" name="id_district" action="{{ route('add-district') }}" value="{{ old('id_district') }}" autofocus>
                      <option value="0" disabled="true" selected="true">--Choose a District--</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Latitude</label>
                  <div class="col-sm-10">
                    <input value='{{ $input["latitude"] or ""}}' type="latitude" class="form-control" id="" name="latitude" placeholder="latitude">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Longitude</label>
                  <div class="col-sm-10">
                    <input value='{{ $input["longitude"] or ""}}' type="longitude" class="form-control" id="" name="longitude" placeholder="longitude">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Atitude</label>
                  <div class="col-sm-10">
                    <input value='{{ $input["atitude"] or ""}}' type="atitude" class="form-control" id="" name="atitude" placeholder="atitude">
                  </div>
                </div>
                  
                  <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary pull-right">Save</button>
                </div>
                </div>
              </form>
            </div>

              <!-- /.tab-pane -->
<!-- isolator -->
            <div role="tabpanel" class="tab-pane" id="isolator">
              <form class="form-horizontal" action="" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="box-body">
                  <div class="box-header with-border">
                    <h3 class="box-title">Add New Isolator</h3>
                    <p>{{ $error_msg or "" }}</p>
                  </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Isolator Name</label>
                  <div class="col-sm-10">
                    <input value='{{ $input["name_isolator"] or ""}}' type="" class="form-control" id="" name="name_isolator" placeholder="name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Instansi</label>
                  <div class="col-sm-10">
                    <input value='{{ $input["instansi_isolator"] or ""}}' type="" class="form-control" id="" name="instansi_isolator" placeholder="instansi">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Expertise</label>
                  <div class="col-sm-10">
                    <input value='{{ $input["instansi_isolator"] or ""}}' type="" class="form-control" id="" name="expertise_isolator" placeholder="expertise">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Isolated at</label>
                  <div class="col-xs-5">
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <!-- <input value='{{ $input["date_isolator"] or ""}}' type="text" class="form-control pull-right" name="date_isolator" id="datepicker"> -->
                    </div>
                  </div>
                </div>
                  
                  <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary pull-right">Save</button>
                </div>
                </div>
              </form>
            </div>
              <!-- /.tab-pane -->
<!-- raiser -->
            <div role="tabpanel" class="tab-pane" id="raiser">
              <form class="form-horizontal" action="" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="box-body">
                  <div class="box-header with-border">
                    <h3 class="box-title">Add New raiser</h3>
                    <p>{{ $error_msg or "" }}</p>
                  </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Raiser Name</label>
                  <div class="col-sm-10">
                    <input value='{{ $input["name_raiser"] or ""}}' type="" class="form-control" id="" name="name_raiser" placeholder="name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Instansi</label>
                  <div class="col-sm-10">
                    <input value='{{ $input["instansi_raiser"] or ""}}' type="" class="form-control" id="" name="instansi_raiser" placeholder="instansi">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Expertise</label>
                  <div class="col-sm-10">
                    <input value='{{ $input["expertise_raiser"] or ""}}' type="" class="form-control" id="" name="expertise_raiser" placeholder="expertise">
                  </div>
                </div>
                  
                  <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary pull-right">Save</button>
                </div>
                </div>
              </form>
            </div>
              <!-- /.tab-pane -->
          </div>
            <!-- /.tab-content -->
        </div>
          <!-- /.nav-tabs-custom -->
      </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){

                $(document).on('change','.states',function(){
                    console.log('{!!URL::to('/add-prov')!!}');

                    var id_state=$(this).val();
                    console.log(id_state);
                    var div=$(this).parent();

                    var op=" ";

                     $.ajax({
                        type:'get',
                        url:'{!!URL::to('/add-prov')!!}',
                      //  url: 'herbarium-management/weedherba/create-findProv',
                        data:{'id':id_state},
                        // console.log(state_id);
                        success:function(data){
                            console.log('success');

                            console.log(data);
                           op+='<option value="0" selected="disabled">--Choose a Province--</option>';
                            for(var i=0;i<data.length;i++){
                                op+='<option value="'+data[i].id_province+'">'+data[i].name_province+'</option>';
                            }
                            console.log(op);
                            $('.prov').html(" ");
                            $('.prov').append(op);
                        },
                        error:function(){

                        }
                     });
                });

                $(document).on('change','.prov',function(){
                    console.log('{!!URL::to('/add-city')!!}');

                    var id_province=$(this).val();
                    console.log(id_province);
                    var div=$(this).parent();
                    console.log(id_province);

                    var op=" ";

                     $.ajax({
                        type:'get',
                        url:'{!!URL::to('/add-city')!!}',
                      //  url: 'herbarium-management/weedherba/create-findProv',
                        data:{'id':id_province},
                        // console.log(state_id);
                        success:function(data){
                            console.log('success');

                            console.log(data);
                           op+='<option value="0" selected="disabled">--Choose a City--</option>';
                            for(var i=0;i<data.length;i++){
                                op+='<option value="'+data[i].id_city+'">'+data[i].name_city+'</option>';
                            }
                            console.log(op);
                            $('.city').html(" ");
                            $('.city').append(op);
                        },
                        error:function(){

                        }
                     });
                });
                $(document).on('change','.city',function(){
                    console.log('{!!URL::to('/add-district')!!}');

                    var id_city=$(this).val();
                    console.log(id_city);
                    var div=$(this).parent();
                    console.log(id_city);

                    var op=" ";

                     $.ajax({
                        type:'get',
                        url:'{!!URL::to('/add-district')!!}',
                      //  url: 'herbarium-management/weedherba/create-findProv',
                        data:{'id':id_city},
                        // console.log(state_id);
                        success:function(data){
                            console.log('success');

                            console.log(data);
                           op+='<option value="0" selected="disabled">--Choose a District--</option>';
                            for(var i=0;i<data.length;i++){
                                op+='<option value="'+data[i].id_district+'">'+data[i].name_district+'</option>';
                            }
                            console.log(op);
                            $('.district').html(" ");
                            $('.district').append(op);
                        },
                        error:function(){

                        }
                     });
                });
            });
        </script>

</section>

<script>
 //redirect to specific tab
 $(document).ready(function () {
 // $('#tabMenu a[href="#{{ old('tab') }}"]').tab('show')
 });
</script>