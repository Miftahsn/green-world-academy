<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fa-solid fa-user"></i>
            <p>
                Profile
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('profile.user')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Profile</p>
                </a>
            </li>
        </ul>
    </li>
</ul>
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fa-solid fa-folder-open"></i>
            <p>
                Tugas
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('user.tugas')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tugas Pekanan</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('user.tugas.terkirim')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tugas Terkirim</p>
                </a>
            </li>
        </ul>
    </li>
</ul>