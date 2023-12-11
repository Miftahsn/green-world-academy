@extends('Template.base')

@section('title', 'Tugas Pekanan')

@section('content')

<!-- Header -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Tugas Pekanan</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('index.home')}}">Home</a></li>
                    <li class="breadcrumb-item">Detail Tugas</li>
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
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="id_tugas">Tugas</label>
                                <input type="text" name="id_tugas" class="form-control @error('id_tugas') is-invalid @enderror" id="id_tugas" value="{{ $tugas->tugas }}" disabled>
                                @error('id_tugas')
                                <div class="invalid-feedback">
                                    <strong>{{ $message}}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="soal">Soal</label>
                                <input type="text" name="soal" class="form-control @error('soal') is-invalid @enderror" id="soal" value="{{ $tugas->soal }}" disabled>
                                @error('soal')
                                <div class="invalid-feedback">
                                    <strong>{{ $message}}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="deskripsi_soal">Deskripsi Soal</label>
                                <input type="text" name="deskripsi_soal" class="form-control @error('deskripsi_soal') is-invalid @enderror" id="deskripsi_soal" value="{{ $tugas->deskripsi_soal }}" disabled>
                                @error('deskripsi_soal')
                                <div class="invalid-feedback">
                                    <strong>{{ $message}}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="deadline">Deadline</label>
                                <input type="text" name="deadline" class="form-control @error('deadline') is-invalid @enderror" id="deadline" value="{{ $tugas->deadline }}">
                                @error('deadline')
                                <div class="invalid-feedback">
                                    <strong>{{ $message}}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection