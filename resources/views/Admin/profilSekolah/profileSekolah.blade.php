@extends('Template.base')

@section('title', 'Profile Sekolah')

@section('content')

<!-- Header -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h3>Profile Sekolah</h3>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('index.home')}}">Home</a></li>
          <li class="breadcrumb-item active">Profile Sekolah</li>
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
              <a href="{{ route('create.profile.sekolah')}}" class="btn btn-primary btn-md">Add Profile</a>
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
                    <th>Visi</th>
                    <th>Misi</th>
                    <th>Sejarah Sekolah</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ( $profile as $row )
                  <tr>
                    <td><a href="{{ route('visi', $row->id)}}" class="text-secondary">Lihat Visi</a></td>
                    <td><a href="{{ route('misi', $row->id)}}" class="text-secondary">Lihat Misi</a></td>
                    <td><a href="{{ route('sejarah', $row->id)}}" class="text-secondary">Lihat Sejarah</a></td>
                    
                    <td>
                      <a href="{{ route('edit.profile.sekolah', $row->id)}}" class="btn btn-secondary"><i class="fa-solid fa-pencil"></i></a>
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