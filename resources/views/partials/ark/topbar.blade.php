@if(!Auth::guest())
    <div class="topbar-c theme-toggle-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <ul class="list-inline topbar-c-contacts">
                    </ul>
                </div>
                <div class="col-sm-6">
                    <ul class="list-inline topbar-c-actions ">
                        <li class="topbar-c-actions-item"><a class="topbar-c-actions-link" href="{{  url('admin/dashboard') }}">Dashboard</a></li>
                        <li class="topbar-c-actions-item"><a class="topbar-c-actions-link" href="{{ url('/logout') }}">Logout</a></li>
                    </ul>
                </div>
            </div><!--// End row -->
        </div>
    </div>
@endif