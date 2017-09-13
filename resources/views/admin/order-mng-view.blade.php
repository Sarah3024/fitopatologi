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
        Order
        <small>Detail</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('order-mng') }}"><i class=""></i>Order Detail</a></li>
        <li><a href="#">View</a></li>
        <!-- <li class="active">Fixed</li> -->
      </ol>
    </section>

    <section class="content">
      <div class="box box-default" style="padding:10px;padding-right:30px;padding-left:30px;">
        <div class="row">
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
                            Order
                          </a>
                        </h5>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in" style="padding-left:20px;">
                        <div class="box-body">
                          <h5 class="box-title">
                            <i><p class="text-muted">Id Order:</p></i>
                          </h5>
                            <h4 style="padding-left:30px;"><i>{{ $order->id_order }}</i></h4>

                          <h5 class="box-title">
                            <i><p class="text-muted">Quantity:</p></i>
                          </h5>
                            <h4 style="padding-left:30px;">{{ $order->quantity_order}}</h4>

                          <h5 class="box-title">
                            <i><p class="text-muted">Order Date:</p></i>
                          </h5>
                            <h4 style="padding-left:30px;"><?php echo date('d M Y', strtotime($order->date_order)) ?></h4>

                          <h5 class="box-title">
                            <i><p class="text-muted">Tanggal Dikirim:</p></i>
                          </h5>
                            <h4 style="padding-left:30px;"><?php echo date('d M Y', strtotime($order->date_expire)) ?></h4>

                          <h5 class="box-title">
                            <i><p class="text-muted">Type Order:</p></i>
                          </h5>
                            <h4 style="padding-left:30px;">
                              @if($order->typeOrder_id === 1)
                                Isolate Ordering
                              @elseif ($order->$typeOrder_id === 2)
                                Isolate Analysis
                              @endif
                            </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.box-body -->
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