<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('SMDP')</title>
<!--cutiproses-->
  <link rel="stylesheet" href="{{URL ('assets/cutiproses/css/style.css')}}">
  <!-- Bootstrap core CSS -->

  <link href="{{URL ('assets/template/css/bootstrap.min.css')}}" rel="stylesheet">

  <link href="{{URL ('assets/template/fonts/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{URL ('assets/template/css/animate.min.css')}}" rel="stylesheet">

    <link href="{{URL ('assets/css/nprogress.css')}}" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="{{URL ('assets/css/custom.css')}}" rel="stylesheet">
  <link href="{{URL ('assets/css/icheck/flat/green.css')}}" rel="stylesheet">



  <script src="{{URL ('assets/template/js/jquery.min.js')}}"></script>

  <!-- colorpicker -->
  <link href="{{URL ('assets/css/colorpicker/bootstrap-colorpicker.min.css')}}" rel="stylesheet">

  <script src="{{URL ('assets/js/jquery.min.js')}}"></script>

  <script type="text/javascript" src="http://www.google.com/jsapi"></script>

    <script src="{{URL ('assets/form/js/jquery/jquery-1.8.2.min.js')}}" type="text/javascript" ></script>
 <script type="text/javascript" src="http://www.google.com/jsapi"></script>

 
 <!--uploadfile-->

  <!--Stylesheets-->
  <link href="{{URL ('assets/uploadfile/css/jquery.filer.css')}}" type="text/css" rel="stylesheet" />
  <link href="{{URL ('assets/uploadfile/css/themes/jquery.filer-dragdropbox-theme.css')}}" type="text/css" rel="stylesheet" />

  <!--jQuery-->
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script type="text/javascript" src="{{URL ('assets/uploadfile/js/jquery.filer.min.js?v=1.0.5')}}"></script>
  <script type="text/javascript" src="{{URL ('assets/uploadfile/js/custom.js?v=1.0.5')}}"></script>





</head>


<body class="nav-md">

  <div class="container body">


    <div class="main_container">

      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>BIOTROP</span></a>
          </div>
          <div class="clearfix"></div>

          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
           <img src="{{ asset('assets/images/seameo.jpg') }}" alt="Avatar">
            </div>
            
          </div>
          <!-- /menu prile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
              <span>19 Juli 2016  15:05</span>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-table"></i> Data Pegawai <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="{{URL('tabelpegawaireguler')}}">Reguler</a> </li>
                    <li><a href="{{URL('tabelpegawaios')}}">Out Sourcing</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i>Tambah Data Pegawai <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="{{URL('regulertambah')}}">Reguler</a>
                    </li>
                    <li><a href="{{URL('outsourcingtambah')}}">Out Sourcing</a>
                    </li>
                  </ul>
                </li>
                 <li><a href="{{URL('choosecuti')}}" ><i class="fa fa-desktop"></i> Data Cuti Tahunan</a>
                </li>

                <li><a href="{{URL('/susunankeluarga')}}"><i class="fa fa-table"></i> Panduan Sistem </span></a>    
                </li>
                <li><a><i class="fa fa-bar-chart-o"></i> Data Operator <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="{{URL('tabel_form_riwayat')}}">Log Activites</a>
                    </li>
                    <li><a href="{{URL('riwayatkerja')}}">Settings</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
           

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
        
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">

        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->                    
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>                   
                </ul>
          </nav>
        </div>

      </div>
      <!-- /top navigation -->

      <!-- page content -->
     
     <div class="right_col" role="main">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="dashboard_graph">
              @yield('content')
              <div class="clearfix"></div>
            </div>
          </div>

        </div>
        <br />
<!-- footer content -->

        <footer>
          <div class="copyright-info">
            <p class="pull-right">© 2016 . Powered by <a href="">Ilkom IPB</a>  
            </p>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
      <!-- /page content -->
    

  </div>
</div>
  

  <script src="{{URL ('assets/template/js/bootstrap.min.js')}}"></script>

  <!-- bootstrap progress js -->
  <script src="{{URL ('assets/js/progressbar/bootstrap-progressbar.min.js')}}"></script>
  <script src="{{URL ('assets/js/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <!-- icheck -->
  <script src="{{URL ('assets/js/icheck/icheck.min.js')}}"></script>
<!-- form wizard -->
  <script type="text/javascript" src="{{URL ('assets/js/wizard/jquery.smartWizard.js')}}"></script>
    <script src="{{URL ('assets/js/custom.js')}}"></script>
     <!-- input mask -->
  <script src="{{URL ('assets/template/js/input_mask/jquery.inputmask.js')}}"></script>
  
  <!-- pace -->
  <script src="{{URL ('assets/js/pace/pace.min.js')}}"></script>



<!--Form-->
<script src="{{URL ('assets/form/js/bootstrap/bootstrap-transition.js')}}" type="text/javascript" ></script>
        <script src="{{URL ('assets/form/js/bootstrap/bootstrap-alert.js')}}" type="text/javascript" ></script>
        <script src="{{URL ('assets/form/js/bootstrap/bootstrap-modal.js')}}" type="text/javascript" ></script>
        <script src="{{URL ('assets/form/js/bootstrap/bootstrap-dropdown.js')}}" type="text/javascript" ></script>
        <script src="{{URL ('assets/form/js/bootstrap/bootstrap-scrollspy.js')}}" type="text/javascript" ></script>
        <script src="{{URL ('assets/form/js/bootstrap/bootstrap-tab.js')}}" type="text/javascript" ></script>
        <script src="{{URL ('assets/form/js/bootstrap/bootstrap-tooltip.js')}}" type="text/javascript" ></script>
        <script src="{{URL ('assets/form/js/bootstrap/bootstrap-popover.js')}}" type="text/javascript" ></script>
        <script src="{{URL ('assets/form/js/bootstrap/bootstrap-button.js')}}" type="text/javascript" ></script>
        <script src="{{URL ('assets/form/js/bootstrap/bootstrap-collapse.js')}}" type="text/javascript" ></script>
        <script src="{{URL ('assets/form/js/bootstrap/bootstrap-carousel.js')}}" type="text/javascript" ></script>
        <script src="{{URL ('assets/form/js/bootstrap/bootstrap-typeahead.js')}}" type="text/javascript" ></script>
        <script src="{{URL ('assets/form/js/bootstrap/bootstrap-affix.')}}js" type="text/javascript" ></script>
        <script src="{{URL ('assets/form/js/bootstrap/bootstrap-datepicker.js')}}" type="text/javascript" ></script>
        <script src="{{URL ('assets/form/js/jquery/jquery-tablesorter.js')}}" type="text/javascript" ></script>
        <script src="{{URL ('assets/form/js/jquery/jquery-chosen.js')}}" type="text/javascript" ></script>
        <script src="{{URL ('assets/form/js/jquery/virtual-tour.js')}}" type="text/javascript" ></script>

<script type="text/javascript">
    $(document).ready(function() {
      // Smart Wizard
      $('#wizard').smartWizard();

      function onFinishCallback() {
        $('#wizard').smartWizard('showMessage', 'Finish Clicked');
        //alert('Finish Clicked');
      }
    });

    $(document).ready(function() {
      // Smart Wizard
      $('#wizard_verticle').smartWizard({
        transitionEffect: 'slide'
      });

    });
  </script>

<script type="text/javascript">
        $(function(){
            $('.chosen').chosen();
            $("[rel=tooltip]").tooltip();

            $("#vguide-button").click(function(e){
                new VTour(null, $('.nav-page')).tourGuide();
                e.preventDefault();
            });
            $("#vtour-button").click(function(e){
                new VTour(null, $('.nav-page')).tour();
                e.preventDefault();
            });
        });
    </script>

 @yield('modalTambahKeluarga')
  @yield('modalTambahPendidikan')
  @yield('modalTambahKerja')
 @yield('js')
 @yield('susunan keluarga')



</body>

</html>
