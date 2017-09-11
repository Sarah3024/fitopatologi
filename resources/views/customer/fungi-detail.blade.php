
@include('customer/header')
  <!-- Full Width Column -->
  <div class="content-wrapper" style="padding-left:100px;padding-right:100px;">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header" style="background-color: #c5e1a5;padding-bottom:20px;">
        <h1>
          Phitopatology
          <small>Information System</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('fungi') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ route('fungi-detail') }}"">Detail</a></li>
            <!-- <li class="active">Fixed</li> -->
        </ol>
      </section>

      </section>
      &nbsp;
      <!-- Main content -->
      <div class="row">
        <div class="col-md-12">
          <div class="box box-default" style="padding:20px;">
            <div class="box-header">
              <h3 class="box-title"><i>Acremonium strictum</i></h3>
            </div>
            <div class="box-body pad table-responsive">
              <div class="col-md-6">
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
                              <h4 style="padding-left:30px;"><i>Acremonium strictum</i></h4>
                            <h5 class="box-title">
                              <i><p class="text-muted">Genus:</p></i>
                            </h5>
                              <h4 style="padding-left:30px;">Asdf</h4>
                            <h5 class="box-title">
                              <i><p class="text-muted">Family:</p></i>
                            </h5>
                              <h4 style="padding-left:30px;">Asdf</h4>
                            <h5 class="box-title">
                              <i><p class="text-muted">Ordo:</p></i>
                            </h5>
                              <h4 style="padding-left:30px;">Asdf</h4>
                            <h5 class="box-title">
                              <i><p class="text-muted">Class:</p></i>
                            </h5>
                              <h4 style="padding-left:30px;">Asdf</h4>
                            <h5 class="box-title">
                              <i><p class="text-muted">Division:</p></i>
                            </h5>
                              <h4 style="padding-left:30px;">Asdf</h4>
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
                              <h4 style="padding-left:30px;">Banana</h4>
                            <h5 class="box-title">
                              <i><p class="text-muted">Ecology:</p></i>
                            </h5>
                              <h4 style="padding-left:30px;">Asdf</h4>
                            <h5 class="box-title">
                              <i><p class="text-muted">Biology:</p></i>
                            </h5>
                              <h4 style="padding-left:30px;">Asdf</h4>
                            <h5 class="box-title">
                              <i><p class="text-muted">Physiology:</p></i>
                            </h5>
                              <h4 style="padding-left:30px;">Asdf</h4>
                            <h5 class="box-title">
                              <i><p class="text-muted">Mycotoxin:</p></i>
                            </h5>
                              <h4 style="padding-left:30px;">Asdf</h4>
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
                            <h5 class="box-title">
                              <i><p class="text-muted">District:</p></i>
                            </h5>
                              <h4 style="padding-left:30px;">Asdf</h4>
                            <h5 class="box-title">
                              <i><p class="text-muted">city:</p></i>
                            </h5>
                              <h4 style="padding-left:30px;">Bogor</h4>
                            <h5 class="box-title">
                              <i><p class="text-muted">Province:</p></i>
                            </h5>
                              <h4 style="padding-left:30px;">West Java</h4>
                            <h5 class="box-title">
                              <i><p class="text-muted">State:</p></i>
                            </h5>
                              <h4 style="padding-left:30px;">Indonesia</h4>
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
                          <div class="box-body">
                              <h4 style="padding-left:30px;">Varin</h4>
                          </div>
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
                          <div class="box-body">
                              <h4 style="padding-left:30px;">Nijma</h4>
                          </div>
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
                          <div class="box-body">
                              <h4 style="padding-left:30px;">24 Feb 2015</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.box-body -->
                </div>
              </div>
              <div class="col-md-6">
                <div class="box box-solid">
                  <!-- /.box-header -->
                  <div class="box-body">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="item active">
                          <img src="http://placehold.it/900x500/39CCCC/ffffff&text=I+Love+Bootstrap" alt="Micrograph">

                          <div class="carousel-caption">
                            Micrograph
                          </div>
                        </div>
                        <div class="item">
                          <img src="http://placehold.it/900x500/3c8dbc/ffffff&text=I+Love+Bootstrap" alt="Second slide">

                          <div class="carousel-caption">
                            Second Slide
                          </div>
                        </div>
                        <div class="item">
                          <img src="http://placehold.it/900x500/f39c12/ffffff&text=I+Love+Bootstrap" alt="Third slide">

                          <div class="carousel-caption">
                            Third Slide
                          </div>
                        </div>
                      </div>
                      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="fa fa-angle-left"></span>
                      </a>
                      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="fa fa-angle-right"></span>
                      </a>
                    </div>
                  </div>
              </div>

            <button type="" class="btn btn-info btn-lg pull-right" style="margin-right:30px;" href="{{ route('order-form') }}">Order Isolate</button>
        <!-- /.col -->




            </div>
            <!-- /.box -->
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- </section> --> 
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
  <!-- /.content-wrapper -->
  @include('cr')
