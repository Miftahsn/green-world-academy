@extends('Template.base')

@section('title', 'Info Pendaftaran Sekolah')

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
          <li class="breadcrumb-item active">Info Pendaftaran Sekolah</li>
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
              <a href="{{ route('create.info.daftar')}}" class="btn btn-primary btn-md">Add Info</a>
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

            <!-- Alert Update -->
            @if(Session::get('Update'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              {{ Session::get('Update') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif
            <!-- End Alert Update -->

            <table class="table table-hover text-nowrap">
              <div class="card-body">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Info Pendaftaran</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ( $info as $row )
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><a href="{{ route('lihat.info.daftar', $row->id)}}" class="text-secondary">Lihat Info Pendaftaran</a></td>
                    
                    <td>
                      <a href="{{ route('edit.info.daftar', $row->id)}}" class="btn btn-secondary"><i class="fa-solid fa-pencil"></i> Edit info</a>
                    </td>
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