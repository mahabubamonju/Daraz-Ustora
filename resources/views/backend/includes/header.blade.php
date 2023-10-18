
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index.html">Admin</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('categories.store')}}">Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('products.store') }}">Products</a>
          </li>
        </ul>
      </div>


    {{-- <div class="container">
        <div class="row">
            <form action="" class="col-9">
                <div class="form-group">
                    <input type="search" name="" id="" class="form-control" placeholder="Search by name or email" value="">

                    
                </div>
                <button class="btn btn-primary">Search</button>

                <a href="">
                    <button class="btn btn-primary" type="button">Reset</button>
                </a>
            </form>
        </div>
    </div> --}}


    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" type="get" action="{{route('search')}}">
        <div class="input-group">
            <input class="form-control" name="search" type="search" placeholder="Search Product" value="" />
            <button class="btn btn-primary" type="submit">Search</button>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#!">Settings</a></li>
                <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                <li><hr class="dropdown-divider" /></li>


                <li>
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</nav>
    