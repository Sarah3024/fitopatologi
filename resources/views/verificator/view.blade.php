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
      <div class="box box-default" style="padding:10px;padding-right:30px;padding-left:30px;">
        <div class="row">
          <div class="box-header">
            <h3 class="box-title"><i>{{ $isolat_cendawan->name_cendawan }}</i></h3>
          </div>
              <div class="col-sm-6">
                <div class="box box-solid">
                  <!-- /.box-header -->
                  <div class="box-body polaroid">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="item active">
                          <img src="http://placehold.it/900x500/39CCCC/ffffff&text=I+Love+Bootstrap" alt="Micrograph">

                          <!-- <div class="carousel-caption">
                            Micrograph
                          </div> -->
                        </div>
                        <div class="item">
                          <img src="http://placehold.it/900x500/3c8dbc/ffffff&text=I+Love+Bootstrap" alt="Second slide">

                          <!-- <div class="carousel-caption">
                            Second Slide
                          </div> -->
                        </div>
                        <div class="item">
                          <img src="http://placehold.it/900x500/f39c12/ffffff&text=I+Love+Bootstrap" alt="Third slide">

                          <!-- <div class="carousel-caption">
                            Third Slide
                          </div> -->
                        </div>
                      </div>
                      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="fa fa-angle-left"></span>
                      </a>
                      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="fa fa-angle-right"></span>
                      </a>
                    </div>
                    <div class="containerphoto">
                      <p>Micrograph</p>
                    </div>
                  </div>

                  <div class="box-body polaroid">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="item active">
                          <img src="http://placehold.it/900x500/39CCCC/ffffff&text=I+Love+Bootstrap" alt="Micrograph">

                          <!-- <div class="carousel-caption">
                            Micrograph
                          </div> -->
                        </div>
                        <div class="item">
                          <img src="http://placehold.it/900x500/3c8dbc/ffffff&text=I+Love+Bootstrap" alt="Second slide">

                          <!-- <div class="carousel-caption">
                            Second Slide
                          </div> -->
                        </div>
                        <div class="item">
                          <img src="http://placehold.it/900x500/f39c12/ffffff&text=I+Love+Bootstrap" alt="Third slide">

                          <!-- <div class="carousel-caption">
                            Third Slide
                          </div> -->
                        </div>
                      </div>
                      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="fa fa-angle-left"></span>
                      </a>
                      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="fa fa-angle-right"></span>
                      </a>
                    </div>
                    <div class="containerphoto">
                      <p>Biakan</p>
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
                              <h4 style="padding-left:30px;"><i>{{ $isolat_cendawan->name_cendawan }}</i></h4>

                              <?php if (isset($species->genus)) { ?>
                            <h5 class="box-title">
                              <i><p class="text-muted">Genus:</p></i>
                            </h5>
                              <h4 style="padding-left:30px;">{{ $species->genus->name_genus}}</h4>

                              <?php if (isset($species->genus->family)) { ?>
                            <h5 class="box-title">
                              <i><p class="text-muted">Family:</p></i>
                            </h5>
                              <h4 style="padding-left:30px;">{{$species->genus->family->name_family}}</h4>

                              <?php if (isset($species->genus->family->ordo)) { ?>
                            <h5 class="box-title">
                              <i><p class="text-muted">Ordo:</p></i>
                            </h5>
                              <h4 style="padding-left:30px;">{{$species->genus->family->ordo->name_ordo}}</h4>

                              <?php if (isset($species->genus->family->ordo->classes)) { ?>
                            <h5 class="box-title">
                              <i><p class="text-muted">Class:</p></i>
                            </h5>
                              <h4 style="padding-left:30px;">{{$species->genus->family->ordo->classes->name_class}}</h4>

                              <?php if (isset($species->genus->family->ordo->classes->divisi)) { ?>
                            <h5 class="box-title">
                              <i><p class="text-muted">Division:</p></i>
                            </h5>
                              <h4 style="padding-left:30px;">{{$species->genus->family->ordo->classes->divisi->name_divisi}}</h4>

                              <?php if (isset($species)) { ?>
                            <h5 class="box-title">
                              <i><p class="text-muted">Description:</p></i>
                            </h5>
                              <h4 style="padding-left:30px;">{{$species->description_species}}</h4>

                              <?php if (isset($isolat_cendawan)) { ?>
                            <h5 class="box-title">
                              <i><p class="text-muted">Utilization:</p></i>
                            </h5>
                              <h4 style="padding-left:30px;">{{$isolat_cendawan->utilization}}</h4>

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
                              <h4 style="padding-left:30px;">{{ $substrat->name_substrat }}</h4>

                              <?php if (isset($species->substrat)) { ?>
                            <h5 class="box-title">
                              <i><p class="text-muted">Ecology:</p></i>
                            </h5>
                              <h4 style="padding-left:30px;">{{ $substrat->ecology }}</h4>

                              <?php if (isset($species->substrat)) { ?>
                            <h5 class="box-title">
                              <i><p class="text-muted">Biology:</p></i>
                            </h5>
                              <h4 style="padding-left:30px;">{{ $substrat->biology }}</h4>

                              <?php if (isset($species->substrat)) { ?>
                            <h5 class="box-title">
                              <i><p class="text-muted">Physiology:</p></i>
                            </h5>
                              <h4 style="padding-left:30px;">{{ $substrat->physiology }}</h4>

                              <?php if (isset($species->substrat)) { ?>
                            <h5 class="box-title">
                              <i><p class="text-muted">Mycotoxin:</p></i>
                            </h5>
                              <h4 style="padding-left:30px;">{{ $substrat->mycotoxin }}</h4>

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
                              <h4 style="padding-left:30px;">{{ $location->district->name_district }}</h4>

                              <?php if (isset($location->district->city)) { ?>
                            <h5 class="box-title">
                              <i><p class="text-muted">city:</p></i>
                            </h5>
                              <h4 style="padding-left:30px;">{{ $location->district->city->name_city }}</h4>

                              <?php if (isset($location->district->city->province)) { ?>
                            <h5 class="box-title">
                              <i><p class="text-muted">Province:</p></i>
                            </h5>
                              <h4 style="padding-left:30px;">{{ $location->district->city->province->name_province }}</h4>

                              <?php if (isset($location->district->city->province->state)) { ?>
                            <h5 class="box-title">
                              <i><p class="text-muted">State:</p></i>
                            </h5>
                              <h4 style="padding-left:30px;">{{ $location->district->city->province->state->name_state }}</h4>

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
                              <h4 style="padding-left:30px;">{{ $storage->isolator->name_isolator }}</h4>
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
                              <h4 style="padding-left:30px;">{{ $storage->raiser->name_raiser }}</h4>
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
                              <h4 style="padding-left:30px;">{{ $updating->date_updating }}</h4>
                          </div>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.box-body -->
                </div>
                <form action="" method="post">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <button name="id" type="submit" class="btn bg-olive btn-flat pull-right" style="margin-right:30px;" value="{{$isolat_cendawan->id_cendawan}}" href="">Verified and Publish</button>
                </form>
                <a type="" class="btn btn-default btn-flat pull-right" style="margin-right:30px;" data-toggle="modal" data-target="#comment">Comment</a>
            </div>
      </div>


      <div id="comment" class="modal example-modal">
        <div class="modal-dialog">
          <div class="modal-content" style="padding-right: 30px; padding-left: 30px;">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Comment</h4>
            </div>
            <div class="modal-body">
              <h4 class="box-title">
              <?php if (isset($isolat_cendawan)) { ?>
                <i><p><strong>Isolate Code: </strong>{{ $isolat_cendawan->code_cendawan }}
                </p></i>
              </h4>
              <h4 class="box-title">
              <?php if (isset($isolat_cendawan)) { ?>
                <i><p><strong>Isolate Name: </strong>{{ $isolat_cendawan->name_cendawan }}
                </p></i>
              <?php }} ?>
              </h4>
              <form class="form-horizontal" action="" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="id_cendawan" value="{{ $input['id_cendawan'] or ''}}">
                <textarea id="editor3" name="comment" value='{{ $input["comment"] or ""}}' rows="10" cols="80" placeholder="Comment here..."></textarea>
              </form>
            </div>
            <div class="modal-footer">
              <form action="" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <a type="submit" data-method="update" href="verificator-comment/{{$isolat_cendawan->id_cendawan}}" value="{{$isolat_cendawan->id_cendawan}}" class="btn btn-primary">Comment</a>
              </form>
            </div>
          </div>
        </div>
      </div>

    </section>



  </div>
  <!-- /.content-wrapper -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->

<!-- ./wrapper -->
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor3');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
  </script>
  <style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
  </style>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
         <script type="text/javascript">

            var comment = function (id_cendawan) {
              comment = $("#user-"+id_user + " > #user-lengthName").text();
              $(".user-lengthName").last().val(lengthName);
  </script> -->

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