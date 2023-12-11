<aside class="main-sidebar sidebar-primary elevation-1">

    <a href="{{ route('index.home') }}" class="brand-link">
        <img src="{{ asset('dist/img/credit/logo-pohon.png') }}" alt="GA" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Green Academy</span>
    </a>

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://ui-avatars.com/api/?name={{Auth::user()->name }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('index.home') }}" class="d-block">Haloo, {{ Auth::user()->name }}</a>
            </div>
        </div>

        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <nav class="mt-2">
            @if(Auth::user()->role == 1)
            @include('template.Menu.menuAdmin')
            @elseif(Auth::user()->role == 2)
            @include('template.Menu.menuPembina')
            @elseif(Auth::user()->role == 3)
            @include('template.Menu.menuUser')
            @endif
        </nav>

    </div>

</aside>