@extends('template.base')

@section('title', 'Dashboard Pembina')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard {{ Auth::user()->name }}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('index.home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard {{ Auth::user()->name }}</li>
                </ol>
            </div>
        </div>
    </div>
</div>


<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Task</span>
                        <span class="info-box-number">
                            {{ $kegiatan }}
                        </span>
                    </div>

                </div>

            </div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-book"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Asignment</span>
                        <span class="info-box-number">{{ $tugas }}<small>%</small></span>
                    </div>

                </div>

            </div>


            <div class="clearfix hidden-md-up"></div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-address-card"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Teachers</span>
                        <span class="info-box-number">{{ $pembina }}</span>
                    </div>

                </div>

            </div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Students</span>
                        <span class="info-box-number">{{ $siswa }}</span>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>
@endsection