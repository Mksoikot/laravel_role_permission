<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ url('panel/dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('panel/dashboard') }}">
                <i class="bi bi-person"></i>
                <span>User</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('role_list') }}">
                <i class="bi bi-person"></i>
                <span>Role</span>
            </a>
        </li>
    </ul>

</aside>
<!-- End Sidebar-->
