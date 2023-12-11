@extends('Template.base')

@section('title', 'Kontak')

@section('content')

<!-- Header -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Kontak Admin</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('index.home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Kontak</li>
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
                                <input type="text" class="form-control" name="kontak" id="kontak" value="{!! $profile->kontak !!}">
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