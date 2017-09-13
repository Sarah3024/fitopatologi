<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          &nbsp;<br/>;&nbsp;
        </div>
        <div class="pull-left info">
          <p>verificator's name</p>
          <a href="#"><i class="fa fa-circle text-success"></i> VERIFICATOR</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        
        <li {{{ (Request::is('verificator') ? 'class=active' : '') }}}><a href="{{ route('fungi-mng') }}"><i class="fa fa-book"></i> <span>Fungi Verification</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  