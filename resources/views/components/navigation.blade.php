<nav class="navbar">
    <span class="navbar-toggle" id="js-navbar-toggle">
        <i class="fas fa-bars"></i>
    </span>
<a href="/products" class="logo">Time2Share</a>
<ul class="main-nav" id="js-menu">
  @auth
  @if(Auth::user()->account_status != "Inactive")
  <li><a href="/products" class="nav-links">Home</a></li>
  @if(Auth::user()->role == 'Admin')
    <li><a href="/manage" class="nav-links">Manage</a></li>
  @endif
  @if(Auth::user()->role != 'Admin')
    <li><a href="/product/create" class="nav-links">Maak product</a>
    <li><a href="/dashboard" class="nav-links">Mijn producten</a></li>
  @endif
  @endif
    <li><a href="{{ route('logout') }}" class="nav-links" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">Log out</a></li>
  @endauth
  @guest
    <li><a href="/login" class="nav-links">Log in</a>
  @endguest

</ul>
</nav>

<form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
{{ csrf_field() }}
</form>