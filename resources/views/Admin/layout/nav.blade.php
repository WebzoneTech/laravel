<div id="sidebar" class="sidebar responsive ace-save-state">
  <ul class="nav nav-list">
    <li class="active">
      <a href="#">
        <i class="menu-icon fa fa-tachometer"></i>
        <span class="menu-text"> Dashboard </span>
      </a>

      <b class="arrow"></b>
    </li>

    <li class="">
      <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-user"></i>
        <span class="menu-text"> Members </span>

        <b class="arrow fa fa-angle-down"></b>
      </a>

      <b class="arrow"></b>

      <ul class="submenu">
        <li class="">
        <a href="{{ route('user.create') }}">
            <i class="menu-icon fa fa-caret-right"></i>
            Adding Member
          </a>

          <b class="arrow"></b>
        </li>

        <li class="">
        <a href="{{ route('user.index') }}">
            <i class="menu-icon fa fa-caret-right"></i>
            View Users
          </a>

          <b class="arrow"></b>
        </li>
      </ul>
    </li>

    <li class="">
      <a href="#" class="dropdown-toggle">
      <i class="menu-icon fa fa-lock"></i>
        <span class="menu-text"> Role </span>
        <b class="arrow fa fa-angle-down"></b>
      </a>

      <b class="arrow"></b>

      <ul class="submenu">
        <li class="">
        <a href="{{ route('user.index') }}">
            <i class="menu-icon fa fa-caret-right"></i>
            Adding Role
          </a>

          <b class="arrow"></b>
        </li>

        <li class="">
        <a href="{{ route('role.index') }}">
            <i class="menu-icon fa fa-caret-right"></i>
            View Roles
          </a>

          <b class="arrow"></b>
        </li>
      </ul>
    </li>

    <li class="">
      <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-briefcase" aria-hidden="true"></i>
        <span class="menu-text"> Bussiness </span>

        <b class="arrow fa fa-angle-down"></b>
      </a>

      <b class="arrow"></b>

      <ul class="submenu">
        <li class="">
          <a href="#">
            <i class="menu-icon fa fa-caret-right"></i>
            Adding Bussiness
          </a>

          <b class="arrow"></b>
        </li>

        <li class="">
          <a href="#">
            <i class="menu-icon fa fa-caret-right"></i>
            View Bussiness
          </a>

          <b class="arrow"></b>
        </li>
      </ul>
    </li>

    


  </ul><!-- /.nav-list -->

  <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
    <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
  </div>
</div>
