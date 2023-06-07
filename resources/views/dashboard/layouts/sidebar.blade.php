<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard*') ? 'active' : ''}}" href="/dashboard">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/products*') ? 'active' : ''}}" href="/dashboard/products">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Products</span>
            </a>
        </li>

        @can('admin')
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Administrator</span>
        </h6>
            <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : ''}}" href="/dashboard/categories">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Categories</span>
            </a>
        </li>
        @endcan
    </ul>
</nav>
