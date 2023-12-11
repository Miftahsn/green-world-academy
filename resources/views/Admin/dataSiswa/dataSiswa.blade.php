@extends('Template.base')

@section('title', 'Data Siswa')

@section('content')

<!-- Header -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h3>Data Siswa</h3>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('index.home')}}">Home</a></li>
          <li class="breadcrumb-item active">Data Siswa</li>
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
            <a href="{{ route('create.siswa')}}" class="btn btn-primary btn-md">Add Siswa</a>
            <div class="card-tools">
              <div class="input-group input-group-sm" style="width: 250px;">
                <form action="{{ route('search.dataSiswa')}}" method="get">
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

            <!-- Alert Update -->
            @if(Session::get('Update'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ Session::get('Update') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif
            <!-- End Alert Update -->

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
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th width="30%">Image</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ( $siswa as $row )
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->username }}</td>
                    <td>{{ $row->email }}</td>
                    <td><img src="{{ url('img') . '/' . $row->image }}" alt="{{ $row->name }}" width="20%"></td>
                    <td>
                      <a href="{{ route('edit.siswa', $row->id)}}" class="btn btn-secondary"><i class="fa-solid fa-pencil"></i> Edit</a>
                      <a href="" data-toggle="modal" data-target="#delete{{ $row->id }}" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Delete</a>
                    </td>
                  </tr>
                  @include('Admin.dataSiswa.deleteSiswa')
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