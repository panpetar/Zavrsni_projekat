<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <div style="height: 40px">
                <a  class="navbar-brand" href="{{ route('home') }}" style="line-height: 40px">
                    <img  src="{{asset('storage/images/logo/logo.png') }}" alt="" style="height: 40px">
                    WinterMagic
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0 h4">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('home*') ? 'active' : '' }}" aria-current="page"
                            href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('houses*') ? 'active' : '' }}"
                            href="{{ route('houses.index') }}">Houses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('snowmen*') ? 'active' : '' }}"
                            href="{{ route('snowmen.index') }}">Snowmen</a>
                    </li>
                </ul>

                <div class="dropdown me-3">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="dropdown-item" href="#">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div style="width:100vw;height:56px; background-color:teal;"></div>
</nav>
