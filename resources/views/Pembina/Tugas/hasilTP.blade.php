@extends('Template.base')

@section('title', 'Hasil Tugas Pekanan')

@section('content')

<!-- Header -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h3>Data Tugas Pekanan</h3>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('index.home')}}">Home</a></li>
          <li class="breadcrumb-item active">Hasil Tugas Pekanan</li>
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
          <div class="card-header">
            <div class="card-tools">
              <div class="input-group input-group-sm" style="width: 250px;">
                <form action="{{ route('search.hasil.tugas')}}" method="get">
                  <div class="input-group-append">
                    <input type="search" name="search" class="form-control float-right" placeholder="Search">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <div class="card-body">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tugas</th>
                    <th>kendala</th>
                    <th>Link</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    @foreach( $hasilTugas as $row )
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->user_id }}</td>
                    <td>{{ $row->id_tugas }}</td>
                    <td>{{ $row->kendala}}</td>
                    <td><a href="{{ $row->link }}" target="_blank">{{ $row->link }}</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </div>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection