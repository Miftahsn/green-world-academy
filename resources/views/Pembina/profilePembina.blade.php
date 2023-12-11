@extends('Template.base')

@section('title', 'Profile Pembina')

@section('content')

<!-- Header -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Profile {{ Auth::user()->name }}</h3>
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
                    <form enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="image" class="mt-3">Image Profile</label>
                                <br>
                                <img src="{{ url('img') . '/' . $profile->image }}" alt="{{ $profile->name }}" width="20%">
                                <br>

                                <label for="name" class="mt-3">Nama Lengkap</label>
                                <input type="text" name="name" class="form-control" id="name" value="{{ $profile->name }}" disabled>
                                
                                <label for="username" class="mt-3">Username</label>
                                <input type="text" name="username" class="form-control" id="username" value="{{ $profile->username }}" disabled>

                                <label for="email" class="mt-3">Email</label>
                                <input type="email" name="email" class="form-control" id="email" value="{{ $profile->email }}" disabled>
                            </div>
                        </div>

                        <div class="card-footer">
                        <a href="{{ route('edit.profile.pembina', $profile->id )}}" class="btn btn-primary">Edit Profile</a>                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection