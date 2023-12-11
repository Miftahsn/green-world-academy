@extends('Template.base')

@section('title', 'Kegiatan')

@section('content')

<!-- Header -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h3>Kegiatan</h3>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('index.home')}}">Home</a></li>
          <li class="breadcrumb-item active">Kegiatan</li>
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
            <a href="{{ route('create.kegiatan')}}" class="btn btn-primary btn-md">Add Kegiatan</a>
            <div class="card-tools">
              <div class="input-group input-group-sm" style="width: 250px;">
                <form action="{{ route('search.kegiatan')}}" method="get">
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
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              {{ Session::get('Update') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif

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
                    <th width="5%">No</th>
                    <th>Judul</th>
                    <th width="35%">Gambar</th>
                    <th>Kegiatan</th>
                    <th width="10%">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ( $kegiatan as $row )
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->judul }}</td>
                    <td><img src="{{ url('img') . '/' . $row->galeri }}" alt="{{ $row->judul }}" class="img-fluid"></td>
                    <td><a href="" class="text-secondary" data-toggle="modal" data-target="#berita{{ $row->id }}">Lihat Kegiatan</a></td>
                    <td>
                      <a href="{{ route('edit.kegiatan', $row->id)}}" class="btn btn-secondary"><i class="fa-solid fa-pencil"></i> Edit</a>
                      <a href="" data-toggle="modal" data-target="#delete{{ $row->id }}" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Delete</a>
                    </td>
                  </tr>
                  @include('Admin.Kegiatan.deleteKegiatan')
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

<div class="modal fade" id="berita{{ $row->id }}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">{{ $row->judul }}</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="">
          @csrf
          <div class="card-body">
            <div class="form-group">
              <textarea type="text" name="kegiatan" id="kegiatan">{!! $row->kegiatan !!}</textarea>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@section('ckEditor')
<script>
  ClassicEditor
    .create(document.querySelector('#kegiatan'))
    .catch(error => {
      console.error(error);
    });
</script>
@endsection