@extends('Template.base')

@section('title', 'Form Tambah Siswa')

@section('content')
<!-- Header -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Form Siswa</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('index.home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Form Siswa</li>
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
                    <form action="{{ route('user.update.profile', $profile->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <input type="hidden" name="id">
                                
                                <label for="user_id">Nama Lengkap</label>
                                <input type="text" name="user_id" value="{{ $profile->user_id }}" class="form-control @error('user_id') is-invalid @enderror" id="user_id">
                                @error('user_id')
                                <div class="invalid-feedback">
                                    <strong>{{ $message}}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username"class="form-control @error('username') is-invalid @enderror" id="username">
                                @error('username')
                                <div class="invalid-feedback">
                                    <strong>{{ $message}}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input  @error('image') is-invalid @enderror" id="image">
                                        <label class="custom-file-label" for="image"></label>
                                    </div>
                                    @error('image')
                                    <div class="invalid-feedback">
                                        <strong>{{ $message}}</strong>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" value="{{ $profile->tanggal_lahir }}" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir"">
                                @error('tanggal_lahir')
                                <div class="invalid-feedback">
                                    <strong>{{ $message}}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <input type="text" name="jenis_kelamin" value="{{ $profile->jenis_kelamin }}" class="form-control @error('jenis_kelamin') is-invalid @enderror">
                                @error('jenis_kelamin')
                                <div class="invalid-feedback">
                                    <strong>{{ $message}}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" value="{{ $profile->alamat }}" class="form-control @error('alamat') is-invalid @enderror" id="alamat">
                                @error('alamat')
                                <div class="invalid-feedback">
                                    <strong>{{ $message}}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="no_telp">No Telpon</label>
                                <input type="text" name="no_telp" value="{{ $profile->no_telp }}" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp">
                                @error('no_telp')
                                <div class="invalid-feedback">
                                    <strong>{{ $message}}</strong>
                                </div>
                                @enderror
                            </div>


                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
</section>

<!-- End Main Content -->

@endsection