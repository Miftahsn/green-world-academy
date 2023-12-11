@extends('Template.base')

@section('title', 'Tugas Pekanan')

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
          <li class="breadcrumb-item active">Tugas Pekanan</li>
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
            <a href="{{ route('create.tugas.pekanan')}}" class="btn btn-primary">Tambah tugas baru</a>
            <div class="card-tools">
              <div class="input-group input-group-sm" style="width: 250px;">
                <form action="{{ route('search.tugas')}}" method="get">
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
            <!-- Alert Create -->
            @if(Session::get('Create'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ Session::get('Create') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif
            <!-- End Alert Create -->

            <!-- Alert Delete -->
            @if(Session::get('Delete'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ Session::get('Delete') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif
            <!-- End Alert Delete -->
            <table class="table table-hover text-nowrap">
              <div class="card-body">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Pembina</th>
                    <th>Tugas</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    @foreach( $tugas as $row )
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->pembina->name ?? '' }}</td>
                    <td>{{ $row->tugas }}</td>
                    <td>
                      <a href="#" class="btn btn-success" data-toggle="modal" data-target="#showTP{{ $row->id }}"><i class="fa-solid fa-eye"></i> Show</a>
                      <a href="{{ route('edit.tugas.pekanan', $row->id )}}" class="btn btn-secondary"><i class="fa-solid fa-pencil"></i> Edit</a>
                    </td>
                  </tr>
                  @include('Pembina.Tugas.showTP')
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