<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('book.index') }}">Library</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <ul class="navbar-nav nav-bar-right">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('library.borrowstorage') }}">
                    <i class="fas fa-book"></i> Books
                    <span class="badge badge-primary"> {{ Session::has('borrow') ? count(Session::get('borrow')->books) : ''}}</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i> User Management
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @if(Auth::check())
                        <a class="dropdown-item" href="{{ route('user.profile') }}">User Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('user.logout') }}">Logout</a>
                    @else
                        <a class="dropdown-item" href="{{ route('user.getsignup') }}">Signup</a>
                        <a class="dropdown-item" href="{{ route('user.getsignin') }}">Signin</a>
                    @endif
                </div>
            </li>
        </ul>
    </div>
</nav>