<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- <div class="user-panel">
        <div class="pull-left image">
          &nbsp;<br/>;&nbsp;
        </div>
        <div class="pull-left info">
          <p>admin's name</p>
          <a href="#"><i class="fa fa-circle text-success"></i> ADMIN</a>
        </div>
      </div> -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li {{{ (Request::is('admin') ? 'class=active' : '') }}}><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <?php if (Auth::user()->hasRole('operator')) { ?>
        <li class="treeview" >
          <a>
            <i class="fa fa-book"></i> <span>Fungi Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li {{{ (Request::is('fungi-mng') ? 'class=active' : '') }}}><a href="{{ route('fungi-mng') }}"><i class="fa fa-genderless"></i> <span>Posted Collections</span></a></li>
            <li {{{ (Request::is('unverified') ? 'class=active' : '') }}}><a href="{{ route('unverified') }}"><i class="fa fa-genderless"></i> <span>Unverified Collections</span></a></li>
          </ul>
        </li>
        <?php } ?>
        <li {{{ ((Auth::user()->hasRole('admin')) ? '' : 'class=hide') }}} {{{ (Request::is('admin-user-mng') ? 'class=active' : '') }}}><a href="{{ route('user-mng') }}"><i class="fa fa-users"></i> <span>User Management</span></a></li>
        <li {{{ ((Auth::user()->hasRole('admin')) ? '' : 'class=hide') }}} {{{ (Request::is('admin-order-mng') ? 'class=active' : '') }}}><a href="{{ route('order-mng') }}"><i class="fa fa-list-alt"></i> <span>Order Management</span></a></li>
        <li {{{ ((Auth::user()->hasRole('verificator')) ? '' : 'class=hide') }}} {{{ (Request::is('verificator') ? 'class=active' : '') }}}><a href="{{ route('v-fungi-mng') }}"><i class="fa fa-check"></i> <span>Fungi Verification</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
