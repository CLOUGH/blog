<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ $user->name }}</strong>
                        </span> <span class="text-muted text-xs block">{{ $user->email }} </b></span> </span> </a>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li class="{{ Request::is('admin/dashboard') ? 'active' : ''}}">
                <a href="{{ url('admin/dashboard') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
            </li>
            <li class="{{ Request::is('admin/pages*') ? 'active' : ''}}">
                <a href="{{ url('admin/pages') }}"><i class="fa fa-file-o"></i> <span class="nav-label">Pages</span></a>
            </li>
            <li class="{{ Request::is('admin/posts*') ? 'active' : ''}}">
                <a href="{{ url('admin/posts') }}"><i class="fa fa-edit"></i> <span class="nav-label">Posts</span></a>
            </li>
            <li class="{{ Request::is('admin/portfolios*') ? 'active' : ''}}">
                <a href="{{ url('admin/portfolio') }}"><i class="fa fa-camera"></i> <span class="nav-label">Portfolio</span></a>
            </li>
        </ul>

    </div>
</nav>