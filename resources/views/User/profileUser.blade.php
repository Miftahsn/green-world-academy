@extends('Template.base')

@section('title', 'Profile User')

@section('content')

<!-- Header -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Profile {{ Auth::user()->name }}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('index.home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Profile {{ Auth::user()->name }}</li>
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
                    <form action="{{ route('user.update.profile', $profile->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">

                                <label for="user_id" class="mt-3">Nama Lengkap</label>
                                <input type="text" name="user_id" class="form-control" id="user_id" value="{{ $profile->Siswa->name ?? '' }}" disabled>

                                <label for="email" class="mt-3">Email</label>
                                <input type="email" name="email" class="form-control" id="email" value="{{ $profile->Siswa->email ?? '' }}" disabled>

                                <label for="jenis_kelamin" class="mt-3">Jenis Kelamin</label>
                                <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin" value="{{ $profile->jenis_kelamin ?? '' }}">
                                
                                <label for="tanggal_lahir" class="mt-3">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="{{ $profile->tanggal_lahir ?? '' }}">
                               
                                <label for="alamat" class="mt-3">Alamat</label>
                                <input type="text" name="alamat" class="form-control" id="alamat" value="{{ $profile->alamat ?? '' }}">
                                
                                <label for="no_telp" class="mt-3">No Telpon</label>
                                <input type="text" name="no_telp" class="form-control" id="no_telp" value="{{ $profile->no_telp ?? '' }}">

                                <br>
                                <label for="image">Image</label>
                                <br>
                                <img src="{{ url('img') . '/' . $image->image }}" alt="{{ $image->name }}" width="20%">
                                <br>
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