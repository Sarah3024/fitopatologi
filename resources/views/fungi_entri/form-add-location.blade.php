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
                    <input value='{{ $input["latitude"] or ""}}' type="latitude" class="form-control" id="latitude" name="latitude" placeholder="latitude">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Longitude</label>
                  <div class="col-sm-8">
                    <input value='{{ $input["longitude"] or ""}}' type="longitude" class="form-control" id="" name="longitude" placeholder="longitude">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Atitude</label>
                  <div class="col-sm-8">
                    <input value='{{ $input["atitude"] or ""}}' type="atitude" class="form-control" id="" name="atitude" placeholder="atitude">
                  </div>
                </div>