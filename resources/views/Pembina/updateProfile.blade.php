@extends('Template.base')

@section('title', 'Update Pembina')

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
                    <li class="breadcrumb-item active"><a href="{{ route('profile.pembina')}}">Profile Pembina</a></li>
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
                <form action="{{ route('update.profile.pembina', $profile->id )}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ $profile->name }}">
                            @error('name')
                            <div class="invalid-feedback">
                                <strong>{{ $message}}</strong>
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" value="{{ $profile->username }}">
                            @error('username')
                            <div class="invalid-feedback">
                                <strong>{{ $message}}</strong>
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ $profile->email }}">
                            @error('email')
                            <div class="invalid-feedback">
                                <strong>{{ $message}}</strong>
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input  @error('image') is-invalid @enderror" id="image" value="{{ $profile->image}}">
                                    <label class="custom-file-label" for="image"></label>
                                </div>
                                @error('image')
                                <div class="invalid-feedback">
                                    <strong>{{ $message}}</strong>
                                </div>
                                @enderror
                            </div>
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
@endsection