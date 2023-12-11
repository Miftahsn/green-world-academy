<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
                Profil Sekolah
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('index.profile.sekolah') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Profil</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('index.kegiatan') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kegiatan</p>
                </a>
            </li>
        </ul>
    </li>
</ul>
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fa-solid fa-user"></i>
            <p>
                Data User
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('index.dataPembina')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pembina</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('index.dataSiswa')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Siswa</p>
                </a>
            </li>
        </ul>
    </li>
</ul>
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="fa-solid fa-chart-line"></i>
            <p>
                Chart
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('index.chart')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data User</p>
                </a>
            </li>
        </ul>
    </li>
</ul>
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fa-solid fa-inbox"></i>
            <p>
                Info Pendaftaran
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('info.daftar')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Info Pendaftaran</p>
                </a>
            </li>
        </ul>
    </li>
</ul>