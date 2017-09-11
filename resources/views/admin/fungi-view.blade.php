@include('header')
  @include('admin/header')
  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  @include('admin/sidebar')

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-bottom:20px">
      <h1>
        Fungi Collections
        <small>Management</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('v-fungi-mng') }}"><i class=""></i>Fungi Management</a></li>
        <li><a href="#">View</a></li>
        <!-- <li class="active">Fixed</li> -->
      </ol>
    </section>

    <section class="content">
      <!-- <div class="row"> -->
        <div class="box box-default" style="padding:10px;padding-right:30px;padding-left:30px;">
          <div class="box-header">
            <h3 class="box-title"><i>{{ $isolat_cendawan->name_cendawan }}</i></h3>
          </div>
          <div class="row">
              <div class="col-sm-6">
                <div class="box box-solid">
                  <!-- /.box-header -->
                  <div class="box-body polaroid">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                      @foreach($photos as $key => $photo)
                        <li data-target="#carousel-example-generic" data-slide-to="{{$key}}" class="{{ ($key == 0) ? 'active' : '' }}"></li>
                      @endforeach
                      </ol>
                      <div class="carousel-inner">
                      @foreach($photos as $key => $photo)
                        <div class="item {{ ($key == 0) ? 'active' : '' }}">
                          <img src="{{$photo->url_photo}}" alt="Micrograph">

                          <div class="carousel-caption">
                            {{$photo->label_photo}}
                          </div>
                        </div>

                      @endforeach
                      </div>
                      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="fa fa-angle-left"></span>
                      </a>
                      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="fa fa-angle-right"></span>
                      </a>
                    </div>
                    <!-- <div class="containerphoto">
                      <p>Micrograph</p>
                    </div> -->
                  </div>

                </div>
              </div>
          </div>
              <div class="box-body pad table-responsive">
                <div class="box box-solid">
                  <!-- /.box-header -->
                  <div class="box-body">
                    <div class="box-group" id="accordion">
                      <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                      <div class="panel box box-default">
                        <div class="box-header with-border">
                          <h5 class="box-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                              Species
                            </a>
                          </h5>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" style="padding-left:20px;">
                          <div class="box-body">
                            <h5 class="box-title">
                              <i><p class="text-muted">Species Name:</p></i>
                            </h5>
                              <h4 id="fungi-name-cendawan" style="padding-left:30px;"><i>{{ $isolat_cendawan->name_cendawan }}</i></h4>

                              <?php if (isset($species->genus)) { ?>
                            <h5 class="box-title">
                              <i><p class="text-muted">Genus:</p></i>
                            </h5>
                              <h4 id="fungi-name-genus" style="padding-left:30px;">{{ $species->genus->name_genus}}</h4>

                              <?php if (isset($species->genus->family)) { ?>
                            <h5 class="box-title">
                              <i><p class="text-muted">Family:</p></i>
                            </h5>
                              <h4 id="fungi-name-family" style="padding-left:30px;">{{$species->genus->family->name_family}}</h4>

                              <?php if (isset($species->genus->family->ordo)) { ?>
                            <h5 class="box-title">
                              <i><p class="text-muted">Ordo:</p></i>
                            </h5>
                              <h4 id="fungi-name-ordo" style="padding-left:30px;">{{$species->genus->family->ordo->name_ordo}}</h4>

                              <?php if (isset($species->genus->family->ordo->classes)) { ?>
                            <h5 class="box-title">
                              <i><p class="text-muted">Class:</p></i>
                            </h5>
                              <h4 id="fungi-name-class" style="padding-left:30px;">{{$species->genus->family->ordo->classes->name_class}}</h4>

                              <?php if (isset($species->genus->family->ordo->classes->divisi)) { ?>
                            <h5 class="box-title">
                              <i><p class="text-muted">Division:</p></i>
                            </h5>
                              <h4 id="fungi-name-divisi" style="padding-left:30px;">{{$species->genus->family->ordo->classes->divisi->name_divisi}}</h4>

                              <?php if (isset($species)) { ?>
                            <h5 class="box-title">
                              <i><p class="text-muted">Description:</p></i>
                            </h5>
                              <h4 id="fungi-deskripsi" style="padding-left:30px;">{{$species->description_species}}</h4>

                              <?php if (isset($isolat_cendawan->utilization)) { ?>
                            <h5 class="box-title">
                              <i><p class="text-muted">Utilization:</p></i>
                            </h5>
                              <h4 id="fungi-utilization" style="padding-left:30px;">{{$isolat_cendawan->utilization}}</h4>

                              <?php }}}}}}} ?>
                          </div>
                        </div>
                      </div>
                      <div class="panel box box-default">
                        <div class="box-header with-border">
                          <h5 class="box-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                              Substrat
                            </a>
                          </h5>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse in" style="padding-left:20px;">
                          <div class="box-body">
                            <h5 class="box-title">
                              <i><p class="text-muted">Substrat Name:</p></i>
                            </h5>
                              <h4 id="fungi-name-substrat" style="padding-left:30px;">{{ $substrat->name_substrat }}</h4>

                              <?php if (isset($species->substrat)) { ?>
                            <h5 class="box-title">
                              <i><p class="text-muted">Ecology:</p></i>
                            </h5>
                              <h4 id="fungi-ecology" style="padding-left:30px;">{{ $substrat->ecology }}</h4>

                              <?php if (isset($species->substrat)) { ?>
                            <h5 class="box-title">
                              <i><p class="text-muted">Biology:</p></i>
                            </h5>
                              <h4 id="fungi-biology" style="padding-left:30px;">{{ $substrat->biology }}</h4>

                              <?php if (isset($species->substrat)) { ?>
                            <h5 class="box-title">
                              <i><p class="text-muted">Physiology:</p></i>
                            </h5>
                              <h4 id="fungi-name-physiology" style="padding-left:30px;">{{ $substrat->physiology }}</h4>

                              <?php if (isset($species->substrat)) { ?>
                            <h5 class="box-title">
                              <i><p class="text-muted">Mycotoxin:</p></i>
                            </h5>
                              <h4 id="fungi-mycotoxin" style="padding-left:30px;">{{ $substrat->mycotoxin }}</h4>

                              <?php }}}} ?>
                          </div>
                        </div>
                      </div>
                      <div class="panel box box-default">
                        <div class="box-header with-border">
                          <h5 class="box-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                              Location
                            </a>
                          </h5>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse in" style="padding-left:20px;">
                          <div class="box-body">

                              <?php if (isset($location->district)) { ?>
                            <h5 class="box-title">
                              <i><p class="text-muted">District:</p></i>
                            </h5>
                              <h4 id="fungi-name-district" style="padding-left:30px;">{{ $location->district->name_district }}</h4>

                              <?php if (isset($location->district->city)) { ?>
                            <h5 class="box-title">
                              <i><p class="text-muted">city:</p></i>
                            </h5>
                              <h4 id="fungi-name-city" style="padding-left:30px;">{{ $location->district->city->name_city }}</h4>

                              <?php if (isset($location->district->city->province)) { ?>
                            <h5 class="box-title">
                              <i><p class="text-muted">Province:</p></i>
                            </h5>
                              <h4 id="fungi-name-province" style="padding-left:30px;">{{ $location->district->city->province->name_province }}</h4>

                              <?php if (isset($location->district->city->province->state)) { ?>
                            <h5 class="box-title">
                              <i><p class="text-muted">State:</p></i>
                            </h5>
                              <h4 id="fungi-name-state" style="padding-left:30px;">{{ $location->district->city->province->state->name_state }}</h4>

                              <?php }}}} ?>
                          </div>
                        </div>
                      </div>
                      <div class="panel box box-default">
                        <div class="box-header with-border">
                          <h5 class="box-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                              Isolator
                            </a>
                          </h5>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse in" style="padding-left:20px;">
                          <?php if (isset($storage->isolator)) { ?>
                          <div class="box-body">
                              <h4 id="fungi-name-isolator" style="padding-left:30px;">{{ $storage->isolator->name_isolator }}</h4>
                          </div>
                          <?php } ?>
                        </div>
                      </div>
                      <div class="panel box box-default">
                        <div class="box-header with-border">
                          <h5 class="box-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                              Raiser
                            </a>
                          </h5>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse in" style="padding-left:20px;">
                          <?php if (isset($storage->raiser)) { ?>
                          <div class="box-body">
                              <h4 id="fungi-name-raiser" style="padding-left:30px;">{{ $storage->raiser->name_raiser }}</h4>
                          </div>
                          <?php } ?>
                        </div>
                      </div>
                      <div class="panel box box-default">
                        <div class="box-header with-border">
                          <h5 class="box-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                              Updating
                            </a>
                          </h5>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse in" style="padding-left:20px;">
                          <?php if (isset($updating)) { ?>
                          <div class="box-body">
                              <h4 id="fungi-updating" style="padding-left:30px;">{{ $updating->date_updating }}</h4>
                          </div>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.box-body -->
                </div>
                <a type="submit" class="btn btn-sm btn-primary pull-right" style="margin-right:30px;" href="{{ route('fungi-edit') }}">Edit</a>
                <a type="submit" class="btn btn-sm btn-danger pull-right" style="margin-right:30px;" href="#">Delete</a>
            </div>
    </section>

  </div>
  <!-- /.content-wrapper -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->

<!-- ./wrapper -->

  @include('footer')

<style>

div.polaroid {
  width: 80%;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
}

div.containerphoto {
  text-align: center;
  padding: 10px 20px;
}
</style>