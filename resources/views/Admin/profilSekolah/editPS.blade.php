@extends('template.base')

@section('title', 'Edit Profile Sekolah')

@section('content')
<!-- Header -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Form Edit Profile Sekolah</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('index.home')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('index.profile.sekolah')}}">Profile Sekolah</a></li>
                    <li class="breadcrumb-item active">Form Edit Profile Sekolah</li>
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
                    <form action="{{ route('update.profile.sekolah', $profile->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="visi">Visi</label>
                                <textarea type="text" name="visi" class="form-control @error('visi') is-invalid @enderror" id="visi">{{ $profile->visi }}</textarea>
                                @error('visi')
                                <div class="invalid-feedback">
                                    <strong>{{ $message}}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="misi">Misi</label>
                                <textarea type="text" name="misi" class="form-control @error('misi') is-invalid @enderror" id="misi">{{ $profile->misi }}</textarea>
                                @error('misi')
                                <div class="invalid-feedback">
                                    <strong>{{ $message}}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="sejarah">Tentang Kami</label>
                                <textarea type="text" name="sejarah" class="form-control @error('sejarah') is-invalid @enderror" id="sejarah">{{ $profile->sejarah }}</textarea>
                                @error('sejarah')
                                <div class="invalid-feedback">
                                    <strong>{{ $message}}</strong>
                                </div>
                                @enderror
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
        .create(document.querySelector('#visi'))
        .catch(error => {
            console.error(error);
        });
</script>
<script>
    ClassicEditor
        .create(document.querySelector('#misi'))
        .catch(error => {
            console.error(error);
        });
</script>
<script>
    ClassicEditor
        .create(document.querySelector('#sejarah'))
        .catch(error => {
            console.error(error);
        });
</script>

@endsection