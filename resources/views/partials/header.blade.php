<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
<a class='navbar-brand' href="{{ route('welcome') }}">Moj blog</a>
<ul></ul>
<a class='navbar-brand' href="{{ route('home') }}">Home</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExaple09" aria-expanded="false" aria-label="Toggle Navigation">

<span class="navbar-toggler-icon"></span>
</button>

    <div class="collapse navbar-collapse" id="navbarsExample09">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
            <a class="nav-link" href="">Dashboard<span class="sr-only">(current)</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">User Account</a>
        <div class="dropdown-menu" aria-labelledby="dropdown09">
        @guest
            <a class="dropdown-item" href=" {{ route('login') }}">Sign in</a>
            <a class="dropdown-item" href=" {{ route('register') }}">Sign up</a>
        @else
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout</a>

            <form id="logout-form" action="{{route('logout')}}" method="POST" style="display.none">
            {{ csrf_field() }}
            </form>
        @endguest
    
        </div>
        </li>
        </ul>
    </div>
</nav>

