@extends('Template.base')

@section('title', 'Form Tugas Pekanan')

@section('content')
<!-- Header -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Form Tugas</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('index.home')}}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('tugas.pekanan')}}">Tugas Pekanan</a></li>
                    <li class="breadcrumb-item active">Form Tugas Pekanan</li>
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
                    <form action="{{ route('store.tugas.pekanan')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="id_pembina">Nama Pembina</label>
                                <select class="custom-select form-control-border  @error('id_pembina') is-invalid @enderror" id="id_pembina" name="id_pembina">
                                    <option>Pilih Nama Pembina</option>
                                    @foreach ($pembina as $row)
                                    <option value="{{ $row->id }}" {{ old('id_pembina') == $row->id ? 'selected' : '' }}> {{$row->name }} </option>
                                    @endforeach
                                </select>
                                @error('id_pembina')
                                <div class="invalid-feedback">
                                    <strong>{{ $messages }}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="tugas">Tugas</label>
                                <input type="text" name="tugas" class="form-control @error('tugas') is-invalid @enderror" id="tugas" placeholder="Tambahkan tugas ...">
                                @error('tugas')
                                <div class="invalid-feedback">
                                    <strong>{{ $message}}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="soal">Soal</label>
                                <input type="text" name="soal" class="form-control @error('soal') is-invalid @enderror" id="soal" placeholder="Tambahkan soal ...">
                                @error('soal')
                                <div class="invalid-feedback">
                                    <strong>{{ $message}}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="deskripsi_soal">Deskripsi Soal</label>
                                <input type="text" name="deskripsi_soal" class="form-control @error('deskripsi_soal') is-invalid @enderror" id="deskripsi_soal" placeholder="Tambahkan Deskripsi ...">
                                @error('deskripsi_soal')
                                <div class="invalid-feedback">
                                    <strong>{{ $message}}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="deadline">Deadline</label>
                                <input type="date" name="deadline" class="form-control @error('deadline') is-invalid @enderror" id="deadline">
                                @error('deadline')
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