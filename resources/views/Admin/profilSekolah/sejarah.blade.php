@extends('Template.base')

@section('title', 'Sejarah')

@section('content')

<!-- Header -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Info Pendaftaran Sekolah</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('index.home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Info Pendaftaran</li>
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
                                <textarea type="text" name="sejarah" id="sejarah">{!! $profile->sejarah !!}</textarea>
                                <input type="hidden" name="id" value="{{ $profile->id }}">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
@section('ckEditor')
<script>
    ClassicEditor
        .create(document.querySelector('#sejarah'))
        .catch(error => {
            console.error(error);
        });
</script>
@endsection