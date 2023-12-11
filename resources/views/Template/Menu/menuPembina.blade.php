<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fa-solid fa-user"></i>
            <p>
                Profile
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
    <li class="nav-item">
        <a href="{{ route('profile.pembina')}}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Profile Pembina</p>
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
                Tugas Pekanan
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('tugas.pekanan')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tugas</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('hasil.tugas.pekanan')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Hasil Tugas</p>
                </a>
            </li>
        </ul>
    </li>
</ul>
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fa-solid fa-database"></i>
            <p>
                Data Siswa
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('index.siswa.data')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Siswa</p>
                </a>
            </li>
        </ul>
    </li>
</ul>