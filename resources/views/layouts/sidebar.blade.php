<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src=" {{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">ADMIN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/IMG_20210630_194817_902.jpg" class="img-circle elevation-2" alt="User Image">
            </div>


            <div class="info">
                <a>

                    {{ Auth::user()->name }}
                </a>
            </div>

        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('categories.index') }}"
                                class="nav-link @if (Route::currentRouteName() == 'categories.index') active @endif">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>Books Cartegories</p>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="{{ route('books.index') }}"
                                class="nav-link @if (Route::currentRouteName() == 'books.index') active @endif">
                                <i class="far fa-books nav-icon"></i>
                                {{-- <i class="far fa-book-alt"></i> --}}
                                <i class="fal fa-books"></i>
                                <p>Books </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('registers.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Registers </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('authors.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Authors </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Borrowed Books</p>
                            </a>
                        <li class="nav-item">
                            <a href="{{ route('onlines.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                {{-- <i class=" nav-icon  fas fa-router "></i> --}}
                                <p>Online Books</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Simple Link
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li> --}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>