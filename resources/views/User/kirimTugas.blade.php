@extends('Template.base')

@section('title', 'Kirim Tugas Pekanan')

@section('content')

<!-- Header -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Kirim Tugas Pekanan</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('index.home')}}">Home</a></li>
                    <li class="breadcrumb-item">Kirim Tugas</li>
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
                    <form action="{{ route('user.submit.tugas', $tugas->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="user_id">Nama Siswa</label>
                                <textarea name="user_id" class="form-control" id="user_id" value="{{ $siswa->id }}">{{ $siswa->name }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="id_tugas">Tugas</label>
                                <textarea name="id_tugas" id="id_tugas" value="{{ $tugas->id }}" class="form-control">{{$tugas->tugas}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="soal">Soal</label>
                                <textarea name="soal" id="soal" value="{{ $tugas->id }}" class="form-control">{{$tugas->soal}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="id_pembina">Nama Pembina</label>
                                <textarea value="{{ $tugas->id }}" class="form-control" name="id_pembina" id="id_pembina" {{ old('id_pembina') == $tugas->id ? 'selected' : '' }}> {{$tugas->pembina->name}} </textarea>
                            </div>
                            <div class="form-group">
                                <label for="kendala">Kendala</label>
                                <input type="text" name="kendala" class="form-control @error('user_id') is-invalid @enderror" id="kendala " placeholder="Masukkan kendala">
                            </div>
                            <div class="form-group">
                                <label for="link">Link</label>
                                <input type="text" name="link" class="form-control @error('user_id') is-invalid @enderror" id="link " placeholder="Masukkan link ">
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