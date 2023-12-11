@extends('Template.base')

@section('title', 'Edit Tugas Terkirim')

@section('content')

<!-- Header -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Edit Tugas Terkirim</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('index.home')}}">Home</a></li>
                    <li class="breadcrumb-item">Edit Tugas</li>
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
                    <form action="{{ route('user.update.tugas', $tugas->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="user_id">Nama Siswa</label>
                                <textarea name="user_id" class="form-control" id="user_id" value="{{ $tugas->user_id }}">{{ $tugas->user_id }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="kendala">Kendala</label>
                                <textarea name="kendala" id="kendala" value="{{ $tugas->id }}" class="form-control">{{$tugas->kendala}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="link">Link</label>
                                <textarea name="link" id="link" value="{{ $tugas->id }}" class="form-control">{{$tugas->link}}</textarea>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection