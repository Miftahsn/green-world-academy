@extends('Template.base')

@section('title', 'Tugas Terkirim')

@section('content')

<!-- Header -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>List Tugas Terkirim</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('index.home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Tugas Terkirim</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- ENd Header -->

<!-- Main Content -->

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 250px;">
                                <form action="{{ route('search.tugas.user')}}" method="get">
                                    <div class="input-group-append">
                                        <input type="search" name="search" class="form-control float-right" placeholder="Search">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="card-body table-responsive p-0">
                        <!-- Alert Create -->
                        @if(Session::get('Update'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ Session::get('Update') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        <!-- End Alert Create -->
                        <table class="table table-hover text-nowrap">
                            <div class="card-body">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Tugas</th>
                                        <th>Deskripsi Tugas</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $tugasTerkirim as $row )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->user_id }}</td>
                                        <td><a href="" data-toggle="modal" data-target="#tugas{{ $row->id }}" class="text-secondary">Lihat Link</a>
                                        <td><a href="{{ route('user.detail.tugas', $row->id)}}" class="text-secondary">Lihat Deskripsi</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('user.tugas.edit', $row->id)}}" class="btn btn-secondary" title="Edit Tugas Terkirim"><i class="fa-solid fa-paper-plane"></i></i></a>
                                        </td>
                                    </tr>
                                    @include('User.lihatTugasTerkirim')
                                    @endforeach
                                </tbody>
                            </div>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection