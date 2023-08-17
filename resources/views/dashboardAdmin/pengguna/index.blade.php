@extends('dashboardAdmin.layouts.main')

@section('content')
<div class="card mt-5">
    <div class="row mb-3 mt-3 mx-3">
      <div class="col-lg-6">
     <a href="{{ route('pengguna.create') }}" class="btn btn-primary">Tambah Data</a>
      </div>
    </div>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead class="table-dark">
          <tr>
            <th class="text-white">No</th>
            <th class="text-white">Username</th>
            <th class="text-white">Alamat</th>
            <th class="text-white">Email</th>
            <th class="text-white">Pekerjaan</th>
            <th class="text-white">Status</th>
            <th class="text-white">Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach($users as $p)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $p->pengguna }}</strong></td>
            <td>{{ $p->alamat }}</td>
            <td>
                {{ $p->email }}
            </td>
            <td>
                {{ $p->pekerjaan }}
            </td>
      @if($p->is_admin  == 0)
          <td><span class="badge bg-label-primary me-1">User</span></td>
          @else 
          <td><span class="badge bg-label-primary me-1">Admin</span></td>
          @endif
       
      <td>
        <div class="dropdown">
          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="pengguna/{{ $p->pengguna }}/edit"
            ><i class="bx bx-edit-alt me-1"></i> Edit</a
            >
            <form action="pengguna/{{ $p->pengguna }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class=" dropdown-item bx bx-trash me-1" onclick="return confirm('Yakin Ingin Menghapus ??')" >Delete</button>
            </form>
          </div>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
  </table>
  </div>
  </div>
  
@endsection