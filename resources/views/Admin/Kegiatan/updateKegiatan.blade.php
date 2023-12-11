@extends('template.base')

@section('title', 'Form Kegiatan')

@section('content')
<!-- Header -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Form Edit Kegiatan</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('index.home')}}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('index.kegiatan')}}">Kegiatan</a></li>
                    <li class="breadcrumb-item active">Form Kegiatan</li>
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
                    <form action="{{ route('update.kegiatan', $kegiatan->id )}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <textarea type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" id="judul" value="{{ $kegiatan->judul }}">{{ $kegiatan->judul }}</textarea>
                                
                            </div>
                            <div class="form-group">
                                <label for="galeri">Gambar</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="galeri" class="custom-file-input  @error('galeri') is-invalid @enderror" id="galeri">
                                        <label class="custom-file-label" for="galeri"></label>
                                    </div>
                                    @error('galeri')
                                    <div class="invalid-feedback">
                                        <strong>{{ $message}}</strong>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="kegiatan">Kegiatan</label>
                                <textarea type="text" name="kegiatan" class="form-control @error('kegiatan') is-invalid @enderror" id="kegiatan" value="{{ $kegiatan->kegiatan }}">{{ $kegiatan->kegiatan }}</textarea>
                                
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
@section('ckEditor')
<script>
    ClassicEditor
        .create(document.querySelector('#kegiatan'))
        .catch(error => {
            console.error(error);
        });
</script>
@endsection