@extends('Template.base')

@section('title', 'Form Edit Info Pendaftaran')

@section('content')
<!-- Header -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Form Edit Info Pendaftaran</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('index.home')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('info.daftar')}}">Info Pendaftaran</a></li>
                    <li class="breadcrumb-item active">Form Edit Info Pendaftaran</li>
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
                    <form action="{{ route('update.info.daftar', $info->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="info_pendaftaran">Info Pendaftaran</label>
                                <textarea type="text" name="info_pendaftaran" class="form-control @error('info_pendaftaran') is-invalid @enderror" id="info_pendaftaran">{{ $info->info_pendaftaran }}</textarea>
                                @error('info_pendaftaran')
                                <div class="invalid-feedback">
                                    <strong>{{ $message}}</strong>
                                </div>
                                @enderror

                                <input type="hidden" name="id" value="{{ $info->id }}">
                            </div>
                        </div>

                        <div class="card-footer mb-2">
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
        .create(document.querySelector('#info_pendaftaran'))
        .catch(error => {
            console.error(error);
        });
</script>
@endsection