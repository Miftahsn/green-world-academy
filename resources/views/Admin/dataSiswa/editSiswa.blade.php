@extends('Template.base')

@section('title', 'Data Siswa')

@section('content')

<!-- Header -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Profile {{ $siswa->name }}</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('index.home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Profile {{ $siswa->name }}</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <form action="{{ route('update.siswa', $siswa->id )}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <input type="hidden" name="id" value="{{ $siswa->id }}">
                                <label for="name" class="mt-3">Nama Lengkap</label>
                                <input type="text" name="name" class="form-control" id="name" value="{{ $siswa->name }}" disabled>

                                <label for="email" class="mt-3">Email</label>
                                <input type="email" name="email" class="form-control" id="email" value="{{ $siswa->email }}" disabled>

                                <div class="form-group mt-3">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Masukkan username ...">
                                    @error('username')
                                    <div class="invalid-feedback">
                                        <strong>{{ $message}}</strong>
                                    </div>
                                    @enderror
                                </div>

                                <label for="image">Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input  @error('image') is-invalid @enderror" id="image">
                                        <label class="custom-file-label" for="image"></label>
                                    </div>
                                    @error('galeri')
                                    <div class="invalid-feedback">
                                        <strong>{{ $message}}</strong>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Edit Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection