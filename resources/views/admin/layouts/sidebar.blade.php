<div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <div class="form-inline mr-auto"></div>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Merhaba, Samet Yılmaz</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
<form method="POST" action="{{ route('logout') }}">
  @csrf
  <button type="submit" class="dropdown-item has-icon text-danger" style="background:none;border:none;padding:0;margin:0;width:100%;text-align:left;">
    <i class="fas fa-sign-out-alt"></i> Logout
  </button>
</form>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="nav-item active">
                <a href="index.html" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Dropdown</span></a>
                <ul class="dropdown-menu" style="display: none;">
                  <li><a class="nav-link" href="">test</a></li>

                </ul>
              </li>
              <li class="menu-header">Starter</li>

              <li><a class="nav-link" href="{{ route('admin.hero.index') }}"><i class="far fa-square"></i> <span>Hero</span></a></li>
               <li><a class="nav-link" href="{{ route('admin.about.index') }}"><i class="far fa-square"></i> <span>About</span></a></li>
              <li><a class="nav-link" href="{{ route('admin.work.index') }}"><i class="far fa-square"></i> <span>Work</span></a></li>
              <li><a class="nav-link" href="{{ route('admin.services.index') }}"><i class="far fa-square"></i> <span>Services</span></a></li>
              <li><a class="nav-link" href="{{ route('admin.contact.index') }}"><i class="far fa-square"></i> <span>Contact</span></a></li>


            </ul>
        </aside>
      </div>