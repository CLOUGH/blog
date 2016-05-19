<!-- Home -->
<li class="nav-item">
    <a class="nav-item-child radius-3 {{ Request::is('/') ? 'active' : ''}}" href="{{ url('/') }}">Home</a>
</li>
<!-- End Home -->

<!-- Blog -->
<li class="nav-item">
    <a class="nav-item-child radius-3 {{ Request::is('posts*') ? 'active' : '' }}" href="{{ url('/posts') }}">Blog</a>
</li>
<!-- End Blog -->

<!-- Portfolio -->
<li class="nav-item">
    <a class="nav-item-child radius-3 {{ Request::is('portfolio*') ? 'active' : '' }}" href="{{ url('/portfolio') }}">Portfolio</a>
</li>
<!-- End Portfolio -->

<!-- About Me -->
<li class="nav-item">
    <a class="nav-item-child radius-3 {{ Request::is('about*') ? 'active' : '' }}" href="{{ url('/about') }}">About Me</a>
</li>
<!-- End About Me -->
<!-- Hire Me -->
<li class="nav-item">
    <a class="nav-item-child radius-3 {{ Request::is('hire-me*') ? 'active' : '' }}" href="{{ url('/hire-me') }}">Hire Me</a>
</li>
<!-- End Hire Me -->